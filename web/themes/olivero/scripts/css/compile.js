const chalk = require('chalk');
const log = require('./log');
const fs = require('fs');
const postcss = require('postcss');
const postcssCalc = require('postcss-calc');
const postcssImport = require('postcss-import');
const postcssHeader = require('postcss-header');
const postcssPresetEnv = require('postcss-preset-env');
const postcssPixelsToRem = require('postcss-pxtorem');

module.exports = (filePath, callback) => {
  // Transform the file.
  fs.readFile(filePath, (err, css) => {
    postcss([
      postcssImport(),
      postcssPresetEnv({
        stage: 1,
        preserve: false,
        autoprefixer: { grid: 'no-autoplace' },
        features: {
          'blank-pseudo-class': false,
          'focus-visible-pseudo-class': false,
          'focus-within-pseudo-class': false,
          'has-pseudo-class': false,
          'image-set-function': false,
          'prefers-color-scheme-query': false
        }
      }),
      postcssCalc,
      postcssPixelsToRem,
      postcssHeader({
        header: `/*\n * DO NOT EDIT THIS FILE.\n * See the following change record for more information,\n * https://www.drupal.org/node/2815083\n * @preserve\n */\n`,
      }),
    ])
    .process(css, { from: filePath })
    .then(result => {
      callback(result.css);
    })
    .catch(error => {
      log(chalk.red(error));
      process.exitCode = 1;
    });
  });
};
