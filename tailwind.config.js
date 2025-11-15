module.exports = {
  // other config...
  presets: [require("./vendor/wireui/wireui/tailwind.config.js")],
  content: [
    // other paths...
    "./vendor/wireui/wireui/src/*.php",
    "./vendor/wireui/wireui/ts/**/*.ts",
    "./vendor/wireui/wireui/src/WireUi/**/*.php",
    "./vendor/wireui/wireui/src/Components/**/*.php",
  ],
}