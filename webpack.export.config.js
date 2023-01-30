const path = require("path");
const CopyPlugin = require("copy-webpack-plugin");
const ZipPlugin = require("zip-webpack-plugin");

module.exports = (env) => {
  return {
    entry: {},
    output: {
      path: path.resolve(__dirname, `.export`),
      publicPath: "/",
    },
    plugins: [
      new CopyPlugin({
        patterns: [
          { from: ".dist/**", to: "./case-study" },
          { from: "assets/img/**", to: "./case-study" },
          { from: "views/**", to: "./case-study" },
          { from: "*.php", to: "./case-study" },
        ],
      }),
      new ZipPlugin({
        path: "./",
        filename: `case-study.zip`,
        extension: "zip",
        fileOptions: {
          mtime: new Date(),
          mode: 0o100664,
          compress: true,
          forceZip64Format: false,
        },
        zipOptions: {
          forceZip64Format: false,
        },
      }),
    ],
  };
};
