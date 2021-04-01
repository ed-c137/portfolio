module.exports = {
  purge: {
    content: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
  },
  theme: {
    inset: {
      "8": "5rem",
      "0": "0rem",
      "40": "10rem",
      "10": "4rem",
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
  corePlugins: {
    // ...
    opacity: true,
  },
};
