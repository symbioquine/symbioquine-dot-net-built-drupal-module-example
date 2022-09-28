module.exports = {
  entry: {
    'built_drupal_module_example': {
      'import': `${__dirname}/src/main.js`,
    },
  },
  output: {
    path: `${__dirname}/drupal_module_src/js`,
    filename: '[name].js',
    clean: true,
  },
};
