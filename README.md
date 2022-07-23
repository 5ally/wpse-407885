# About

Sample WordPress plugin with 2 blocks based on the [official Gutenberg examples](https://github.com/WordPress/gutenberg-examples). See https://wordpress.stackexchange.com/a/407885/137402 for more details.

**You can find the source of the above-mentioned two blocks here:**

* [`blocks-jsx/select-price-in-editor-content`](https://github.com/5ally/wpse-407885/tree/trunk/blocks-jsx/select-price-in-editor-content) <sub>— modified version of https://github.com/WordPress/gutenberg-examples/tree/trunk/blocks-jsx/01-basic-esnext</sub>

    Preview (WordPress v6.0.1):
    ![image](https://user-images.githubusercontent.com/47658419/180598139-0d210a23-d6c8-4f40-824a-6804fa2a7c05.png)

* [`blocks-jsx/select-price-in-settings-sidebar`](https://github.com/5ally/wpse-407885/tree/trunk/blocks-jsx/select-price-in-settings-sidebar) <sub>— based on the above</sub>

    Preview (WordPress v6.0.1):
    ![image](https://user-images.githubusercontent.com/47658419/180598102-a0996887-3e2c-4fd4-9706-3a3d086b37d4.png)

And basically, make sure you've setup the necessary tools, e.g. [NPM](https://nodejs.org/en/download), then run `npm install` to install the dependencies and `npm build` to build the blocks. 🙂

Happy coding!

PS: I didn't use [@wordpress/env](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/), and see https://github.com/WordPress/gutenberg-examples/blob/trunk/package.json for the original `package.json` file.