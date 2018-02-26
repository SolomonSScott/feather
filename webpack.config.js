const webpack = require('webpack');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const OptimizeCssAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const inProduction = process.env.NODE_ENV === 'production';
const path = require('path');

module.exports = {
	context: __dirname,
	entry: {
		'feather.css': './assets/scss/style.scss',
		'feather.js': './assets/js/main.js',
	},
	output: {
		path: path.resolve(__dirname, './dist'),
		filename: '[name]'
	},
	module: {
		rules: [
		{
			test: /\.scss$/,
			use: ExtractTextPlugin.extract({
				fallback: 'style-loader',
				use: [
				{ loader: 'css-loader', options: { importLoaders: 1, minimize: true } },
				'sass-loader',
				'postcss-loader'
				]
		  })
		},
		{
			test: /\.js$/,
			exclude: /node_modules/,
			loader: "babel-loader"
		}
	  ]
	},
	plugins: [
		new ExtractTextPlugin('[name]'),
		new webpack.optimize.UglifyJsPlugin({
			include: /\.min\.js$/,
			minimize: true,
		}),
		new OptimizeCssAssetsPlugin({
			assetNameRegExp: /\.min\.css$/
		}),
	]
}

if ( inProduction ) {
	module.exports.plugins.push(
		new webpack.optimize.UglifyJsPlugin({
			sourceMap: true
		})
	);
}