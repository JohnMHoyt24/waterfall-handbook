/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal) {
  var handleFragmentLinkClickOrHashChange = function handleFragmentLinkClickOrHashChange(e, $target) {
    $target.parents('.js-vertical-tabs-pane').each(function (index, pane) {
      $(pane).data('verticalTab').focus();
    });
  };

  Drupal.behaviors.claroVerticalTabs = {
    attach: function attach(context) {
      $('body').once('vertical-tabs-fragments').on('formFragmentLinkClickOrHashChange.verticalTabs', handleFragmentLinkClickOrHashChange);
      $(context).find('[data-vertical-tabs-panes]').once('vertical-tabs').each(function initializeVerticalTabs() {
        var $this = $(this).addClass('vertical-tabs__items--processed');
        var focusID = $this.find(':hidden.vertical-tabs__active-tab').val();
        var tabFocus;
        var $details = $this.find('> details');

        if ($details.length === 0) {
          return;
        }

        var tabList = $(Drupal.theme.verticalTabListWrapper());
        $this.wrap($(Drupal.theme.verticalTabsWrapper()).addClass('js-vertical-tabs')).before(tabList);
        $details.each(function initializeVerticalTabItems() {
          var $that = $(this);
          var verticalTab = new Drupal.verticalTab({
            title: $that.find('> summary').text(),
            details: $that
          });
          tabList.append(verticalTab.item);
          $that.removeAttr('open').addClass('js-vertical-tabs-pane').data('verticalTab', verticalTab);

          if (this.id === focusID) {
            tabFocus = $that;
          }
        });

        if (!tabFocus) {
          var $locationHash = $this.find(window.location.hash);

          if (window.location.hash && $locationHash.length) {
            tabFocus = $locationHash.is('.js-vertical-tabs-pane') ? $locationHash : $locationHash.closest('.js-vertical-tabs-pane');
          } else {
            tabFocus = $this.find('> .js-vertical-tabs-pane').eq(0);
          }
        }

        if (tabFocus.length) {
          tabFocus.data('verticalTab').focus(false);
        }
      });
    }
  };

  Drupal.verticalTab = function verticalTab(settings) {
    var self = this;
    $.extend(this, settings, Drupal.theme('verticalTab', settings));
    this.item.addClass('js-vertical-tabs-menu-item');
    this.link.attr('href', "#".concat(settings.details.attr('id')));
    this.detailsSummaryDescription = $(Drupal.theme.verticalTabDetailsDescription()).appendTo(this.details.find('> summary'));
    this.link.on('click', function (event) {
      event.preventDefault();
      self.focus();
    });
    this.details.on('toggle', function (event) {
      event.preventDefault();
    });
    this.details.find('> summary').on('click', function (event) {
      event.preventDefault();
      self.details.attr('open', true);

      if (self.details.hasClass('collapse-processed')) {
        setTimeout(function () {
          self.focus();
        }, 10);
      } else {
        self.focus();
      }
    }).on('keydown', function (event) {
      if (event.keyCode === 13) {
        setTimeout(function () {
          self.details.find(':input:visible:enabled').eq(0).trigger('focus');
        }, 10);
      }
    });
    this.link.on('keydown', function (event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        self.focus();
        self.details.find(':input:visible:enabled').eq(0).trigger('focus');
      }
    });
    this.details.on('summaryUpdated', function () {
      self.updateSummary();
    }).trigger('summaryUpdated');
  };

  Drupal.verticalTab.prototype = {
    focus: function focus() {
      var triggerFocus = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : true;
      this.details.siblings('.js-vertical-tabs-pane').each(function closeOtherTabs() {
        var tab = $(this).data('verticalTab');

        if (tab.details.attr('open')) {
          tab.details.removeAttr('open').find('> summary').attr({
            'aria-expanded': 'false',
            'aria-pressed': 'false'
          });
          tab.item.removeClass('is-selected');
        }
      }).end().siblings(':hidden.vertical-tabs__active-tab').val(this.details.attr('id'));
      this.details.attr('open', true).find('> summary').attr({
        'aria-expanded': 'true',
        'aria-pressed': 'true'
      }).closest('.js-vertical-tabs').find('.js-vertical-tab-active').remove();

      if (triggerFocus) {
        var $summary = this.details.find('> summary');

        if ($summary.is(':visible')) {
          $summary.trigger('focus');
        }
      }

      this.item.addClass('is-selected');
      this.title.after($(Drupal.theme.verticalTabActiveTabIndicator()).addClass('js-vertical-tab-active'));
    },
    updateSummary: function updateSummary() {
      var summary = this.details.drupalGetSummary();
      this.detailsSummaryDescription.html(summary);
      this.summary.html(summary);
    },
    tabShow: function tabShow() {
      this.item.removeClass('vertical-tabs__menu-item--hidden').show();
      this.item.closest('.js-form-type-vertical-tabs').show();
      this.details.removeClass('vertical-tab--hidden js-vertical-tab-hidden').show();
      this.details.parent().children('.js-vertical-tabs-pane').removeClass('vertical-tabs__item--first vertical-tabs__item--last').filter(':visible').eq(0).addClass('vertical-tabs__item--first');
      this.details.parent().children('.js-vertical-tabs-pane').filter(':visible').eq(-1).addClass('vertical-tabs__item--last');
      this.focus(false);
      return this;
    },
    tabHide: function tabHide() {
      this.item.addClass('vertical-tabs__menu-item--hidden').hide();
      this.details.addClass('vertical-tab--hidden js-vertical-tab-hidden').hide();
      this.details.parent().children('.js-vertical-tabs-pane').removeClass('vertical-tabs__item--first vertical-tabs__item--last').filter(':visible').eq(0).addClass('vertical-tabs__item--first');
      this.details.parent().children('.js-vertical-tabs-pane').filter(':visible').eq(-1).addClass('vertical-tabs__item--last');
      var $firstTab = this.details.siblings('.js-vertical-tabs-pane:not(.js-vertical-tab-hidden)').eq(0);

      if ($firstTab.length) {
        $firstTab.data('verticalTab').focus(false);
      } else {
          this.item.closest('.js-form-type-vertical-tabs').hide();
        }

      return this;
    }
  };

  Drupal.theme.verticalTab = function (settings) {
    var tab = {};
    tab.item = $('<li class="vertical-tabs__menu-item" tabindex="-1"></li>').append(tab.link = $('<a href="#" class="vertical-tabs__menu-link"></a>').append($('<span class="vertical-tabs__menu-link-content"></span>').append(tab.title = $('<strong class="vertical-tabs__menu-link-title"></strong>').text(settings.title)).append(tab.summary = $('<span class="vertical-tabs__menu-link-summary"></span>'))));
    return tab;
  };

  Drupal.theme.verticalTabsWrapper = function () {
    return '<div class="vertical-tabs clearfix"></div>';
  };

  Drupal.theme.verticalTabListWrapper = function () {
    return '<ul class="vertical-tabs__menu"></ul>';
  };

  Drupal.theme.verticalTabDetailsDescription = function () {
    return '<span class="vertical-tabs__details-summary-summary"></span>';
  };

  Drupal.theme.verticalTabActiveTabIndicator = function () {
    return "<span class=\"visually-hidden\">".concat(Drupal.t('(active tab)'), "</span>");
  };
})(jQuery, Drupal);;

(function ($, Drupal, drupalSettings) {

  'use strict';

  Drupal.behaviors.tokenTree = {
    attach: function (context, settings) {
      $('table.token-tree', context).once('token-tree').each(function () {
        $(this).treetable({ expandable: true });
      });
    }
  };

  Drupal.behaviors.tokenInsert = {
    attach: function (context, settings) {
      // Keep track of which textfield was last selected/focused.
      $('textarea, input[type="text"]', context).focus(function () {
        drupalSettings.tokenFocusedField = this;
      });

      $('.token-click-insert .token-key', context).once('token-click-insert').each(function () {
        var newThis = $('<a href="javascript:void(0);" title="' + Drupal.t('Insert this token into your form') + '">' + $(this).html() + '</a>').click(function () {
          var content = this.text;

          // Always work in normal text areas that currently have focus.
          if (drupalSettings.tokenFocusedField && (drupalSettings.tokenFocusedField.tokenDialogFocus || drupalSettings.tokenFocusedField.tokenHasFocus)) {
            insertAtCursor(drupalSettings.tokenFocusedField, content);
          }
          // Direct tinyMCE support.
          else if (typeof(tinyMCE) != 'undefined' && tinyMCE.activeEditor) {
            tinyMCE.activeEditor.execCommand('mceInsertContent', false, content);
          }
          // Direct CKEditor support. Only works if the field currently has focus,
          // which is unusual since the dialog is open.
          else if (typeof(CKEDITOR) != 'undefined' && CKEDITOR.currentInstance) {
            CKEDITOR.currentInstance.insertHtml(content);
          }
          // Direct CodeMirror support.
          else if (typeof(CodeMirror) != 'undefined' && drupalSettings.tokenFocusedField && $(drupalSettings.tokenFocusedField).parents('.CodeMirror').length) {
            var editor = $(drupalSettings.tokenFocusedField).parents('.CodeMirror')[0].CodeMirror;
            editor.replaceSelection(content);
            editor.focus();
          }
          // WYSIWYG support, should work in all editors if available.
          else if (Drupal.wysiwyg && Drupal.wysiwyg.activeId) {
            Drupal.wysiwyg.instances[Drupal.wysiwyg.activeId].insert(content)
          }
          // CKeditor module support.
          else if (typeof(CKEDITOR) != 'undefined' && typeof(Drupal.ckeditorActiveId) != 'undefined') {
            CKEDITOR.instances[Drupal.ckeditorActiveId].insertHtml(content);
          }
          else if (drupalSettings.tokenFocusedField) {
            insertAtCursor(drupalSettings.tokenFocusedField, content);
          }
          else {
            alert(Drupal.t('First click a text field to insert your tokens into.'));
          }

          return false;
        });
        $(this).html(newThis);
      });

      function insertAtCursor(editor, content) {
        // Record the current scroll position.
        var scroll = editor.scrollTop;

        // IE support.
        if (document.selection) {
          editor.focus();
          var sel = document.selection.createRange();
          sel.text = content;
        }

        // Mozilla/Firefox/Netscape 7+ support.
        else if (editor.selectionStart || editor.selectionStart == '0') {
          var startPos = editor.selectionStart;
          var endPos = editor.selectionEnd;
          editor.value = editor.value.substring(0, startPos) + content + editor.value.substring(endPos, editor.value.length);
        }

        // Fallback, just add to the end of the content.
        else {
          editor.value += content;
        }

        // Ensure the textarea does not unexpectedly scroll.
        editor.scrollTop = scroll;
      }
    }
  };

})(jQuery, Drupal, drupalSettings);
;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, debounce) {
  $.fn.drupalGetSummary = function () {
    var callback = this.data('summaryCallback');
    return this[0] && callback ? $.trim(callback(this[0])) : '';
  };

  $.fn.drupalSetSummary = function (callback) {
    var self = this;

    if (typeof callback !== 'function') {
      var val = callback;

      callback = function callback() {
        return val;
      };
    }

    return this.data('summaryCallback', callback).off('formUpdated.summary').on('formUpdated.summary', function () {
      self.trigger('summaryUpdated');
    }).trigger('summaryUpdated');
  };

  Drupal.behaviors.formSingleSubmit = {
    attach: function attach() {
      function onFormSubmit(e) {
        var $form = $(e.currentTarget);
        var formValues = $form.serialize();
        var previousValues = $form.attr('data-drupal-form-submit-last');

        if (previousValues === formValues) {
          e.preventDefault();
        } else {
          $form.attr('data-drupal-form-submit-last', formValues);
        }
      }

      $('body').once('form-single-submit').on('submit.singleSubmit', 'form:not([method~="GET"])', onFormSubmit);
    }
  };

  function triggerFormUpdated(element) {
    $(element).trigger('formUpdated');
  }

  function fieldsList(form) {
    var $fieldList = $(form).find('[name]').map(function (index, element) {
      return element.getAttribute('id');
    });
    return $.makeArray($fieldList);
  }

  Drupal.behaviors.formUpdated = {
    attach: function attach(context) {
      var $context = $(context);
      var contextIsForm = $context.is('form');
      var $forms = (contextIsForm ? $context : $context.find('form')).once('form-updated');
      var formFields;

      if ($forms.length) {
        $.makeArray($forms).forEach(function (form) {
          var events = 'change.formUpdated input.formUpdated ';
          var eventHandler = debounce(function (event) {
            triggerFormUpdated(event.target);
          }, 300);
          formFields = fieldsList(form).join(',');
          form.setAttribute('data-drupal-form-fields', formFields);
          $(form).on(events, eventHandler);
        });
      }

      if (contextIsForm) {
        formFields = fieldsList(context).join(',');
        var currentFields = $(context).attr('data-drupal-form-fields');

        if (formFields !== currentFields) {
          triggerFormUpdated(context);
        }
      }
    },
    detach: function detach(context, settings, trigger) {
      var $context = $(context);
      var contextIsForm = $context.is('form');

      if (trigger === 'unload') {
        var $forms = (contextIsForm ? $context : $context.find('form')).removeOnce('form-updated');

        if ($forms.length) {
          $.makeArray($forms).forEach(function (form) {
            form.removeAttribute('data-drupal-form-fields');
            $(form).off('.formUpdated');
          });
        }
      }
    }
  };
  Drupal.behaviors.fillUserInfoFromBrowser = {
    attach: function attach(context, settings) {
      var userInfo = ['name', 'mail', 'homepage'];
      var $forms = $('[data-user-info-from-browser]').once('user-info-from-browser');

      if ($forms.length) {
        userInfo.forEach(function (info) {
          var $element = $forms.find("[name=".concat(info, "]"));
          var browserData = localStorage.getItem("Drupal.visitor.".concat(info));
          var emptyOrDefault = $element.val() === '' || $element.attr('data-drupal-default-value') === $element.val();

          if ($element.length && emptyOrDefault && browserData) {
            $element.val(browserData);
          }
        });
      }

      $forms.on('submit', function () {
        userInfo.forEach(function (info) {
          var $element = $forms.find("[name=".concat(info, "]"));

          if ($element.length) {
            localStorage.setItem("Drupal.visitor.".concat(info), $element.val());
          }
        });
      });
    }
  };

  var handleFragmentLinkClickOrHashChange = function handleFragmentLinkClickOrHashChange(e) {
    var url;

    if (e.type === 'click') {
      url = e.currentTarget.location ? e.currentTarget.location : e.currentTarget;
    } else {
      url = window.location;
    }

    var hash = url.hash.substr(1);

    if (hash) {
      var $target = $("#".concat(hash));
      $('body').trigger('formFragmentLinkClickOrHashChange', [$target]);
      setTimeout(function () {
        return $target.trigger('focus');
      }, 300);
    }
  };

  var debouncedHandleFragmentLinkClickOrHashChange = debounce(handleFragmentLinkClickOrHashChange, 300, true);
  $(window).on('hashchange.form-fragment', debouncedHandleFragmentLinkClickOrHashChange);
  $(document).on('click.form-fragment', 'a[href*="#"]', debouncedHandleFragmentLinkClickOrHashChange);
})(jQuery, Drupal, Drupal.debounce);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.machineName = {
    attach: function attach(context, settings) {
      var self = this;
      var $context = $(context);
      var timeout = null;
      var xhr = null;

      function clickEditHandler(e) {
        var data = e.data;
        data.$wrapper.removeClass('visually-hidden');
        data.$target.trigger('focus');
        data.$suffix.hide();
        data.$source.off('.machineName');
      }

      function machineNameHandler(e) {
        var data = e.data;
        var options = data.options;
        var baseValue = $(e.target).val();
        var rx = new RegExp(options.replace_pattern, 'g');
        var expected = baseValue.toLowerCase().replace(rx, options.replace).substr(0, options.maxlength);

        if (xhr && xhr.readystate !== 4) {
          xhr.abort();
          xhr = null;
        }

        if (timeout) {
          clearTimeout(timeout);
          timeout = null;
        }

        if (baseValue.toLowerCase() !== expected) {
          timeout = setTimeout(function () {
            xhr = self.transliterate(baseValue, options).done(function (machine) {
              self.showMachineName(machine.substr(0, options.maxlength), data);
            });
          }, 300);
        } else {
          self.showMachineName(expected, data);
        }
      }

      Object.keys(settings.machineName).forEach(function (sourceId) {
        var options = settings.machineName[sourceId];
        var $source = $context.find(sourceId).addClass('machine-name-source').once('machine-name');
        var $target = $context.find(options.target).addClass('machine-name-target');
        var $suffix = $context.find(options.suffix);
        var $wrapper = $target.closest('.js-form-item');

        if (!$source.length || !$target.length || !$suffix.length || !$wrapper.length) {
          return;
        }

        if ($target.hasClass('error')) {
          return;
        }

        options.maxlength = $target.attr('maxlength');
        $wrapper.addClass('visually-hidden');
        var machine = $target.val();
        var $preview = $("<span class=\"machine-name-value\">".concat(options.field_prefix).concat(Drupal.checkPlain(machine)).concat(options.field_suffix, "</span>"));
        $suffix.empty();

        if (options.label) {
          $suffix.append("<span class=\"machine-name-label\">".concat(options.label, ": </span>"));
        }

        $suffix.append($preview);

        if ($target.is(':disabled')) {
          return;
        }

        var eventData = {
          $source: $source,
          $target: $target,
          $suffix: $suffix,
          $wrapper: $wrapper,
          $preview: $preview,
          options: options
        };

        if (machine === '' && $source.val() !== '') {
          self.transliterate($source.val(), options).done(function (machineName) {
            self.showMachineName(machineName.substr(0, options.maxlength), eventData);
          });
        }

        var $link = $("<span class=\"admin-link\"><button type=\"button\" class=\"link\">".concat(Drupal.t('Edit'), "</button></span>")).on('click', eventData, clickEditHandler);
        $suffix.append($link);

        if ($target.val() === '') {
          $source.on('formUpdated.machineName', eventData, machineNameHandler).trigger('formUpdated.machineName');
        }

        $target.on('invalid', eventData, clickEditHandler);
      });
    },
    showMachineName: function showMachineName(machine, data) {
      var settings = data.options;

      if (machine !== '') {
        if (machine !== settings.replace) {
          data.$target.val(machine);
          data.$preview.html(settings.field_prefix + Drupal.checkPlain(machine) + settings.field_suffix);
        }

        data.$suffix.show();
      } else {
        data.$suffix.hide();
        data.$target.val(machine);
        data.$preview.empty();
      }
    },
    transliterate: function transliterate(source, settings) {
      return $.get(Drupal.url('machine_name/transliterate'), {
        text: source,
        langcode: drupalSettings.langcode,
        replace_pattern: settings.replace_pattern,
        replace_token: settings.replace_token,
        replace: settings.replace,
        lowercase: true
      });
    }
  };
})(jQuery, Drupal, drupalSettings);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal) {
  Drupal.behaviors.detailsAria = {
    attach: function attach() {
      $('body').once('detailsAria').on('click.detailsAria', 'summary', function (event) {
        var $summary = $(event.currentTarget);
        var open = $(event.currentTarget.parentNode).attr('open') === 'open' ? 'false' : 'true';
        $summary.attr({
          'aria-expanded': open,
          'aria-pressed': open
        });
      });
    }
  };
})(jQuery, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Modernizr, Drupal) {
  function CollapsibleDetails(node) {
    this.$node = $(node);
    this.$node.data('details', this);
    var anchor = window.location.hash && window.location.hash !== '#' ? ", ".concat(window.location.hash) : '';

    if (this.$node.find(".error".concat(anchor)).length) {
      this.$node.attr('open', true);
    }

    this.setupSummary();
    this.setupLegend();
  }

  $.extend(CollapsibleDetails, {
    instances: []
  });
  $.extend(CollapsibleDetails.prototype, {
    setupSummary: function setupSummary() {
      this.$summary = $('<span class="summary"></span>');
      this.$node.on('summaryUpdated', $.proxy(this.onSummaryUpdated, this)).trigger('summaryUpdated');
    },
    setupLegend: function setupLegend() {
      var $legend = this.$node.find('> summary');
      $('<span class="details-summary-prefix visually-hidden"></span>').append(this.$node.attr('open') ? Drupal.t('Hide') : Drupal.t('Show')).prependTo($legend).after(document.createTextNode(' '));
      $('<a class="details-title"></a>').attr('href', "#".concat(this.$node.attr('id'))).prepend($legend.contents()).appendTo($legend);
      $legend.append(this.$summary).on('click', $.proxy(this.onLegendClick, this));
    },
    onLegendClick: function onLegendClick(e) {
      this.toggle();
      e.preventDefault();
    },
    onSummaryUpdated: function onSummaryUpdated() {
      var text = $.trim(this.$node.drupalGetSummary());
      this.$summary.html(text ? " (".concat(text, ")") : '');
    },
    toggle: function toggle() {
      var _this = this;

      var isOpen = !!this.$node.attr('open');
      var $summaryPrefix = this.$node.find('> summary span.details-summary-prefix');

      if (isOpen) {
        $summaryPrefix.html(Drupal.t('Show'));
      } else {
        $summaryPrefix.html(Drupal.t('Hide'));
      }

      setTimeout(function () {
        _this.$node.attr('open', !isOpen);
      }, 0);
    }
  });
  Drupal.behaviors.collapse = {
    attach: function attach(context) {
      if (Modernizr.details) {
        return;
      }

      var $collapsibleDetails = $(context).find('details').once('collapse').addClass('collapse-processed');

      if ($collapsibleDetails.length) {
        for (var i = 0; i < $collapsibleDetails.length; i++) {
          CollapsibleDetails.instances.push(new CollapsibleDetails($collapsibleDetails[i]));
        }
      }
    }
  };

  var handleFragmentLinkClickOrHashChange = function handleFragmentLinkClickOrHashChange(e, $target) {
    $target.parents('details').not('[open]').find('> summary').trigger('click');
  };

  $('body').on('formFragmentLinkClickOrHashChange.details', handleFragmentLinkClickOrHashChange);
  Drupal.CollapsibleDetails = CollapsibleDetails;
})(jQuery, Modernizr, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Modernizr, Drupal) {
  Drupal.behaviors.claroDetails = {
    attach: function attach(context) {
      $(context).once('claroDetails').on('click', function (event) {
        if (event.target.nodeName === 'SUMMARY') {
          $(event.target).trigger('focus');
        }
      });
    }
  };
  Drupal.behaviors.claroDetailsToggleShim = {
    attach: function attach(context) {
      if (Modernizr.details || !Drupal.CollapsibleDetails.instances.length) {
        return;
      }

      $(context).find('details .details-title').once('claroDetailsToggleShim').on('keypress', function (event) {
        var keyCode = event.keyCode || event.charCode;

        if (keyCode === 32) {
          $(event.target).closest('summary').trigger('click');
          event.preventDefault();
        }
      });
    }
  };
})(jQuery, Modernizr, Drupal);;
