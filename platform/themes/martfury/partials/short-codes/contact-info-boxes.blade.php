<div class="ps-contact-info">
    <div class="container">
        <div class="ps-section__header">
            <h3>{!! clean($title) !!}</h3>
        </div>
        <div class="ps-section__content">
            <div class="row">
                {{-- @dd(theme_option('contact_info_box_1_subtitle')) --}}

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="ps-block--contact-info">
                        <h4>E-mail</h4>
                        <p><span class="d-block">
                                {{ theme_option('contact_info_box_1_subtitle') }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="ps-block--contact-info">
                        <h4>Adresse</h4>
                        <p><span class="d-block">
                                {{ theme_option('contact_info_box_2_subtitle') }}
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="ps-block--contact-info">
                        <h4>Numéro de Téléphone</h4>
                        <p>
                            <span class="d-block">
                                {{ theme_option('contact_info_box_1_details') }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
