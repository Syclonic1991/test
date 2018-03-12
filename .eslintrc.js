module.exports = {
  "env": {
    "browser": true,
    "es6": true,
    "jquery": true,
  },
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
