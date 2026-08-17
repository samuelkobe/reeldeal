<?php get_template_part('/parts/spacing_alignment_columns') ?>

<?php if ( get_row_layout() == 'image' ) : ?>

    <section class="image pt-4 <?php acf_row_y_margin($tm, $bm); ?> <?php acf_row_x_margin($lm, $rm); ?>">
        <div class="<?php echo $bg; ?>">
            <div class="object-reveal-250 <?php echo $bg_spacing; ?>">
                <div class="container mx-auto px-4 2xl:px-8 flex justify-center">
                    <div class=" <?php echo $rc; ?> <?php acf_row_alignment($ra); ?>">
                        
                        <div class="flex items-center <?php acf_row_padding($tp, $bp, $lp, $rp); ?> justify-<?php echo $ra; ?>">
                        
                            <div class="w-auto flex flex-col items-center lg:flex-row lg:justify-evenly h-auto relative order-1 <?php echo get_sub_field( 'image_alignment' ); ?>">
                                <?php if ( have_rows( 'image_repeater' ) ) : ?>
                                    <?php while ( have_rows( 'image_repeater' ) ) : the_row(); ?>
                                        <?php $image = get_sub_field( 'image' ); ?>
                                        <?php if ( $image ) : ?>
                                                <img class="w-full h-auto py-4 px-6 lg:w-[30%] lg:p-0 z-1 relative object-cover lg:object-contain lg:shadow-2xl lg:shadow-brand-black rounded-tr-[2rem] rounded-bl-[2rem] lg:rounded-tr-[5rem] lg:rounded-bl-[5rem]" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                
                        </div>  

                    </div>  
                </div>  
            </div>
        </div>
    </section>

<?php endif; ?>