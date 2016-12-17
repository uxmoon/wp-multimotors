<?php

// 1st Metabox

add_filter( 'rwmb_meta_boxes', 'mmotors_register_meta_boxes' );

function mmotors_register_meta_boxes( $meta_boxes ) {
	$prefix = 'cf_';
	$meta_boxes[] = array(
		'id'         => 'Details',
		'title'      => __( 'Detalles', 'mmotors' ),
		'post_types' => array( 'autousado', 'autoclasico', 'motos' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'fields' => array(
			array(
				'name' => __( 'Modelo', 'mmotors' ),
				'id'   => 'cf_automodelo',
				'type' => 'text'
				),
			array(
				'name' => __( 'Color', 'mmotors' ),
				'id'   => $prefix . 'autocolor',
				'type' => 'text'
				),
			array(
				'name' => __( 'Kilometraje', 'mmotors' ),
				'id'   => $prefix . 'autokm',
				'type' => 'text'
				),
			array(
				'name' => __( 'Año', 'mmotors' ),
				'id'   => $prefix . 'autoyear',
				'type' => 'text'
				),
			array(
				'name'    => __( 'Vendido', 'mmotors' ),
				'id'      => $prefix . 'is_sell',
				'type'    => 'select',
				'options' => array(
					'si' => __( 'Si', 'mmotors' ),
					'no' => __( 'No', 'mmotors' ),
				),
			),
			array(
				'name' => __( 'Información adicional', 'mmotors' ),
				'id'   => $prefix . 'autoinfo',
				'type' => 'textarea',
				'rows' => 5,
				'cols' => 5,
				)
			)
		);
	return $meta_boxes;
}





// 2nd Metabox

add_filter( 'rwmb_meta_boxes', 'mmotors_attached_images_meta_box' );

function mmotors_attached_images_meta_box( $meta_boxes ) {
	$prefix = 'cf_';
	$meta_boxes[] = array(
		'title'      => esc_html__( 'Fotos', 'mmotors' ),
		'post_types' => array( 'autousado', 'autoclasico', 'motos' ),
		'fields'     => array(
			array(
				'name'             => __( 'Fotos cargadas', 'mmotors' ),
				'id'               => $prefix . 'image_upload',
				'type'             => 'image_upload',
				'force_delete'     => false,
				'max_file_uploads' => 10,
				// 'callback'         => 'mmotors_get_images',
			),
		),
	);
	return $meta_boxes;
}



add_filter( 'rwmb_meta_boxes', 'mmotors_custom_html_demo' );
function mmotors_custom_html_demo( $meta_boxes ) {
	$prefix = 'cf_';
	$meta_boxes[] = array(
		'title'      => __( 'Custom HTML Demo', 'your-prefix' ),
		'post_types' => array( 'autousado', 'autoclasico', 'motos' ),
		'fields'     => array(
			array(
				'id'       => $prefix . 'custom_html',
				'type'     => 'custom_html',
				'callback' => 'mmotors_get_images',
			),
		),
	);
	return $meta_boxes;
}

function mmotors_get_images() {
	$post_id = false;
	if ( isset( $_GET['post'] ) ) {
		$post_id = intval( $_GET['post'] );
	} elseif ( isset( $_POST['post_ID'] ) ) {
		$post_id = intval( $_POST['post_ID'] );
	}
	if ( ! $post_id ) {
		return '';
	}

	$attachments = get_children( array(
		'post_parent'    => $post_id,
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'numberposts'    => -1,
		'post_status'    => 'any',
	) );
	if ( empty( $attachments ) ) {
		return esc_html__( 'No hay imagenes adjuntas', 'mmotors' );
	}
	$output = '';
	foreach ( $attachments as $attachment ) {
		$output .= wp_get_attachment_image( $attachment->ID, 'thumbnail' );
	}
	return $output;
}