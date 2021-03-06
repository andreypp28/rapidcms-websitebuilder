<?php 
$icons = array('Luxury <br>Business Cards', 'Premium <br>Business Cards', 'Plastic <br>Business Cards',
    'Quick <br>Business Cards', 'Classic <br>Business Cards', 'Metal <br>Business Cards');
?>

@extends('frontend.layouts.default')

@section('content')

<div>
    <div class="rockdesign-products-wrap">
        <div class="container section">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h1>ROCKDESIGN PREMIUM SAMPLE PACK + METAL CARDS</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="full-window-section">
        <div class="swiper-container sample-package-slider">
            <div class="swiper-wrapper">
                <?php for($i=1; $i<=9; $i++) { ?>
                <div class="swiper-slide"><img src='{{ upload_url("samplepack/metal-busines-card-sp-img$i.jpg") }}'></div>
                <?php } ?>
                
                <?php for($i=1; $i<=18; $i++) { ?>
                <div class="swiper-slide"><img src='{{ upload_url("samplepack/sample-pack-img$i.jpg") }}'></div>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    
    <div class="container section">
        <div class="row">
            <div class="col-md-12s">
                <table class="fullwidth-table sample-package-table">
                    <tr class="first-row">
                        <td>15-20</td>
                        <td class="col-mid"><span class="fw-medium">$10</span> COUPON</td>
                        <td>FREE</td>
                    </tr>
                    <tr class="second-row">
                        <td>Premium Samples INCLUDED </td>
                        <td class="col-mid">INCLUDED FOR ALL NEW CUSTOMERS</td>
                        <td>Canada post shipping <span class="d-n-1200">to usa / canada</span></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-12s">
                <div class="samp-exmpl-bl-table">
                    <div class="sampl-descr-wrap">
                        <div class="sampl-descr">
                            <p>This Premium Sample Pack including 15-20 sample business cards from metal, luxury /high end and classic business card samples. Shipping is included for US and Canada. We ship with Canada Post and generally take 7-14 business days for delivery. We also offer Fedex Express shipping if you are located in other countries internationally or need speedy delivery and it has tracking number. Sample pack including $10 coupon code for new customers. $10 Coupon included in the sample pack. This sample pack includes metal business cards. We change our sample cards from time to time, the exact samples photos you see on the website may not be included. If you are looking for a specific samples, please purchase our customized sample pack via email to <a href="mailto:{{ $settings['email.saler_email'] }}">{{ $settings['email.saler_email'] }}</a>.</p>
                            <div class="share-icons-wrap">
                                <div class="addthis_sharing_toolbox"></div>
                            </div>
                        </div>
                    </div>
                    <!--sampl-descr-wrap-->
                    
                    <div class="samp-exmpl-bl-wrap">
                        <?php for($i=1; $i<=6; $i++) { ?>
                        <div class="samp-exmpl-bl appear{{ $i }}">
                            <img src='{{ upload_url("samplepack/sample-cat-tb$i.jpg") }}' alt="sample pack thumbnail {{ $i }}">
                            <div class="samp-exmpl-bl-tit{{ $i }}">{!! strtoupper($icons[$i-1]) !!}</div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="samp-exmpl-hint"> NOTE: We change our sample cards from time to time, the exact samples photos you see on the website may not be included. If you are looking for a specific samples, please purchase our customized sample pack.</div>
            </div>
        </div>
    </div>
    
    <div class="delivery-option-sect">
        <h1>Choose your delivery option</h1>
        <div class="delivery-option-wrap">
            <div class="delivery-option-bl">
                <div class="delivery-option-bl-destin">TO CANADA</div>
                <div class="delivery-option-bl-cont">
                    <div class="delivery-option-bl-titl">PREMIUM SAMPLE PACK</div>
                    <div class="delivery-cost">
                        <span class="currency-icon">$</span>
                        <span class="currency-value">14</span>
                        <span class="currency-badge">CAD</span>
                    </div>
                    <ul class="delivery-benef-wrap">
                        <li>15-20 premium samples</li>
                        <li>Free Ground Shipping Option</li>
                        <li>$10 Coupon included</li>
                    </ul>
                    <div class="get-now-but" data-target="canada-modal">GET IT NOW</div>
                </div>
            </div>
            <div class="delivery-option-bl-cent">
                <div class="delivery-option-bl-destin">TO USA</div>
                <div class="delivery-option-bl-cont">
                    <div class="delivery-option-bl-titl">PREMIUM SAMPLE PACK</div>
                    <div class="delivery-cost">
                        <span class="currency-icon">$</span>
                        <span class="currency-value">14</span>
                        <span class="currency-badge">USD</span>
                    </div>
                    <ul class="delivery-benef-wrap">
                        <li>15-20 premium samples</li>
                        <li>Free Ground Shipping Option</li>
                        <li>$10 Coupon included</li>
                    </ul>
                    <div class="get-now-but-fill" data-target="usa-modal">GET IT NOW</div>
                </div>
            </div>
            <div class="delivery-option-bl">
                <div class="delivery-option-bl-destin">TO WORLDWIDE</div>
                <div class="delivery-option-bl-cont">
                    <div class="delivery-option-bl-titl">PREMIUM SAMPLE PACK</div>
                    <div class="delivery-cost">
                        <span class="currency-icon">$</span>
                        <span class="currency-value">20</span>
                        <span class="currency-badge">USD</span>
                    </div>
                    <div class="fedex-charge">+ FedEX Shipping Charge</div>
                    <ul class="delivery-benef-wrap delivery-benef-wf">
                        <li>15-20 premium samples</li>
                        <li>Free Ground Shipping Option</li>
                        <li>$10 Coupon included</li>
                    </ul>
                    <div class="get-now-but" data-target="worldwide-modal">GET IT NOW</div>
                </div>
            </div>
        </div>
    </div>
    
    <!--Start Subscribe-->
    @include('frontend.home.subscribe')
    <!--End Subscribe-->
</div>  
    
@stop

@section('additional')    

<?php $pack = 'metal'; ?>
@foreach($packData as $code => $opt) 
    @include('frontend.catalog.sample.modalTemplate', compact($opt, $code, $pack))
@endforeach

@stop

@section('styles')
<!--<link href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}" rel="stylesheet" />-->
@stop

@section('scripts')
<script src="{{ asset('frontend/js/pages/samplepack.js') }}"></script>
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56662d8a2ed90913"></script>-->
@stop