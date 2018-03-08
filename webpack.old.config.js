const ExtractTextPlugin = require('extract-text-webpack-plugin');
const path = require('path');
const webpack = require('webpack');
const NODE_ENV = process.env.NODE_ENV || 'development';

const extractSass = new ExtractTextPlugin({
  filename: 'assets/app.css',
});


module.exports = {
  entry: [
    './src/js/main.js',
    './src/scss/main.scss',
  ],
  output: {
    filename: 'assets/app.bundle.js',
    path: path.join(__dirname, 'public'),
    publicPath: '/',
  },
  module: {
    rules: [
      {
        test: /\.(sass|scss)$/,
        loader: extractSass.extract({
          use: [
            {
              loader: 'css-loader',
              options: {
                minimize: true,
              },
            },
            {
              loader: 'postcss-loader',
              options: {
                plugins: [
                  require('autoprefixer')({
                    browsers: [
                      '> 3%',
                      'iOS 7',
                      'android >= 4.2',
                    ],
                  }),
                ],
              },
            },
            {
              loader: 'sass-loader',
            },
          ],
        }),
      },
      {
        test: /\.js$/,
        exclude: [/node_modules/],
        loader: 'babel-loader',
        options: { presets: ['env'] },
      },
    ],
  },
  plugins: [
    extractSass,
    // new webpack.NamedModulesPlugin(),
    // new webpack.HotModuleReplacementPlugin(),
  ],
  devtool: NODE_ENV === 'development' ? 'cheap-inline-module-source-map' : false,
  devServer: {
    hot: true,
    historyApiFallback: true,
    compress: true,
    contentBase: './public',
  },
  resolve: {
    extensions: ['.scss', '.js'],
    alias: {
      bootstrap: path.join(__dirname, '/node_modules/bootstrap/scss/bootstrap.scss'),
    },
  },
};

if (NODE_ENV === 'production') {
  module.exports.plugins.push(
    new webpack.optimize.UglifyJsPlugin({
      compress: {
        warnings: false,
        drop_console: true,
        unsafe: true,
      },
      sourceMap: false,
    }),
  );
}
