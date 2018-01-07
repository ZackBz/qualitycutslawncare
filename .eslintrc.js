module.exports = {
  root: true,
  parser: 'babel-eslint',
  env: {
    browser: true,
    node: true
  },
  extends: 'standard',
  // required to lint *.vue files
  plugins: [
    'html',
    'react'
  ],
  // add your custom rules here
  rules: {
    'no-extend-native': 0,
    'no-unused-vars': 1,
    'react/jsx-uses-react': 'error',
    'react/jsx-uses-vars': 'error'
  },
  globals: {
    React: true
  }
}
