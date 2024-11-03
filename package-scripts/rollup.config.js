import resolve from "@rollup/plugin-node-resolve";
import terser from "@rollup/plugin-terser";

const srcDir = "src/js";
const destDir = "dist/js";
const terserOptions = {
	compress: { passes: 3 },
	module: true,
	mangle: true,
	nameCache: {},
};
const outputPlugins = () => [
	process.env.NODE_ENV === "production" && terser(terserOptions),
];

function build(src, dist, name, format) {
	return {
		input: srcDir + "/" + src,
		plugins: [resolve()],
		output: {
			file: destDir + "/" + dist,
			format: format,
			name: name,
			plugins: outputPlugins(),
		},
	};
}

export default [
	build("index.js", "caap.js", "", "es"),
	build("filtrer_ressources.js", "caap_filtrer_ressources.js", "", "es"),
];
