const currentTask = process.env.npm_lifecycle_event;
const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

const config = {
    entry: './assets/src/index.js',
    output: {
        filename: 'bundled.js',
        path: path.resolve(__dirname, 'assets/dist')
    },
    plugins: [],
    mode: 'development',
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: ["style-loader", "css-loader", "sass-loader"]
            }
        ]
    },
    watch: true
}

if (currentTask == "build") {
    config.mode = "production"
    config.module.rules[0].use[0] = MiniCssExtractPlugin.loader
    config.plugins.push(new MiniCssExtractPlugin({ filename: "main.css"}));
}
module.exports = config