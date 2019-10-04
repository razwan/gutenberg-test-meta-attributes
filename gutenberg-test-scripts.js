( function( blocks, element ) {

	var el = element.createElement,
		registerBlockType = blocks.registerBlockType;

	registerBlockType( 'gutenberg-test/block', {
		title: 'Gutenberg test block',
		icon: 'megaphone',
		category: 'widgets',
		attributes: {
			'my_attribute' : {
				'type'    :'string',
				'source'  :'meta',
				'meta'    :'my_block_meta',
			}
		},
		edit: function( props ) {
			return el( 'div', {}, 'Gutenberg Test Block' );
		}
	} );
}(
	window.wp.blocks,
	window.wp.element,
) );