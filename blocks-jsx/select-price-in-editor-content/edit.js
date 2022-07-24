/**
 * WordPress dependencies
 */
import {
	__,
	sprintf,
} from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { SelectControl } from '@wordpress/components';

/**
 * Internal dependencies
 */
import { blockStyle } from './index';

// Static prices array, but if you want to, you can make it dynamic (inside of
// the edit() function).
const PRICES = [ 100, 150, 199.99 ];

const Edit = ( { attributes, setAttributes } ) => {
	const blockProps = useBlockProps( { style: blockStyle } );

	const currency = '$'; // or maybe, use a `currency` attribute

	// Build an options object for the SelectControl element below.
	const prices = PRICES.map( price => ( {
		label: currency + price,
		value: price,
	} ) );

	// Callback which updates the `price` attribute when a new price is selected
	// from the dropdown.
	const setNewPrice = ( value ) => setAttributes( { price: Number( value ) } );

	return (
		<div { ...blockProps }>
			<SelectControl
				label={ __( 'Price', 'wpse-407885' ) }
				options={ [ { // add a "Select a price" option to the price list
					label: __( 'Select a price', 'wpse-407885' ),
					value: '',
				}, ...prices ] }
				onChange={ setNewPrice }
				value={ attributes.price }
				hideLabelFromVision
				__nextHasNoMarginBottom
			/>

			{ !! attributes.price && (
				<p>
					{ sprintf(
						/* translators: %s: Price with currency, e.g. $100.00 */
						__( 'Selected price: %s', 'wpse-407885' ),
						currency + attributes.price.toFixed( 2 )
					) }
				</p>
			) }
		</div>
	);
};
export default Edit;
