/**
 * WordPress dependencies
 */
//import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

/**
 * Internal dependencies
 */
import { blockStyle } from './index';

const Save = ( { attributes } ) => {
	// Save nothing in the post content if no price was selected.
	if ( ! attributes.price ) {
		return null;
	}

	const blockProps = useBlockProps.save( { style: blockStyle } );

	const currency = '$'; // or maybe, use a `currency` attribute

	return (
		<div { ...blockProps }>
			{ currency }{ attributes.price.toFixed( 2 ) }
		</div>
	);
};
export default Save;
