const path = require('path');
const MiniCSSExtractPlugin = require('mini-css-extract-plugin');


module.exports = {
    entry: './src/index.js',
    output: {
        filename: 'app.min.js',
        path: path.resolve(__dirname, './assets'),
    },
    plugins: [
        new MiniCSSExtractPlugin({ //Plugin to compile the sass files
            filename: "../style.css",  //Compile into:
        })
    ],
    module: {
        rules: [
            {
                test: /\.scss$/,
                loader: [
                    MiniCSSExtractPlugin.loader,
                    'css-loader',
                    'sass-loader'
                ],
            },
            {test: /\.(jpg|jpeg|png|woff|woff2|eot|ttf|svg)$/,loader: 'url-loader?limit=100000'},
        ],
    },
};