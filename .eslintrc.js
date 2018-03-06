module.exports = {
  "parser": "babel-eslint",
  "extends": "airbnb",
  "plugins": [
    "react",
    "jsx-a11y",
    "import",
  ],
  "settings": {
    "react": {
      "pragma": "h"
    }
  },
  "rules": {
    "import/extensions": [0]
  }
};
