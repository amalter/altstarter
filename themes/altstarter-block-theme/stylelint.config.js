const config = {
	extends: ["stylelint-config-standard-scss", "@10up/stylelint-config"],
	rules: {
		"at-rule-no-unknown": [
			true,
			{
				ignoreAtRules: ["use", "forward", "import", "mixin"],
			},
		],
	},
};

module.exports = config;
