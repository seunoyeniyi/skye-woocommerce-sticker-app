<?php get_header(); ?>

<div class="header-design-select">
<h1>Create custom sticker</h1>
    <p>Create your own custom sticker with our online design tool, for your home or business. Order in any size, any die-cut shape, and any quantity!</p>
</div>
<br>
<div class="container sk-sticker-class design-select-page">


<div class="sticker-wizard" data-material-preset-name="glossy_coated" data-sheet-type="single" data-template-name="path" data-template-id="0" data-quantity="111" data-width-mm="51" data-height-mm="25" data-inc-vat="1" data-lang="us" data-site="stickerapp" data-laser-price="" data-laser-save="" data-i18n-mime-type-error="Problems uploading, try again or use another file type. We support PDF, PNG, JPG, AI, PSD, SVG,  BMP, TIF and even GIF." data-i18n-file-size-error="File too big, maximum size is 1gb." data-i18n-cm="&quot;" data-upload-enabled="1" data-fileapp-enabled="0">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-md-3">
              <h4 class="margin-bottom-xs">Cutline</h4>
              <div class="box box-shape horizontal" data-title-if-item-not-available="" id="box-shape">

                <a href="javascript:void(0);" id="rect-item" class="shape item active" data-sheet-type="single" data-template-name="rect">
                  <span class="iconx shape rect"></span>
                  <div class="shape-title">
                    Square </div>
                </a>
                <a href="javascript:void(0);" id="circle-item" class="shape item " data-sheet-type="single" data-template-name="circle">
                  <span class="iconx shape circle"></span>
                  <div class="shape-title">
                    Circle </div>
                </a>
                <a href="javascript:void(0);" class="shape item " data-sheet-type="single" data-template-name="rounded">
                  <span class="iconx shape rounded"></span>
                  <div class="shape-title">
                    Round corners </div>
                </a>
              </div>
            </div>
            <div class="col-sm-3 col-md-2 margin-bottom-sm">

              <div class="box-size" id="box-size">
                <h4 class="margin-bottom-xs single-title ">
                  Size<img alt="Loader" src="https://d6ce0no7ktiq.cloudfront.net/images/web/loaders/light.gif" class="loader" width="16" height="16">
                </h4>
                <h4 class="margin-bottom-xs sheet-title nodisplay" style="display: none;">Template</h4>

                <div class="box">
                  <div class="single-sizes ">
                    <div id="size" imperial="imperial">
                      <!-- <a href="javascript:void(0);" class="item size active" data-width-mm="51" data-height-mm="25">2" x 1"</a>
                      <a href="javascript:void(0);" class="item size" data-width-mm="51" data-height-mm="51">2" x 2"</a>
                      <a href="javascript:void(0);" class="item size" data-width-mm="76" data-height-mm="51">3" x 2"</a>
                      <a href="javascript:void(0);" class="item size" data-width-mm="76" data-height-mm="76">3" x 3"</a>
                      <a href="javascript:void(0);" class="item size" data-width-mm="102" data-height-mm="76">4" x 3"</a>
                      <a href="javascript:void(0);" class="item size" data-width-mm="102" data-height-mm="102">4" x 4"</a>
                      <a href="javascript:void(0);" class="item size" data-width-mm="127" data-height-mm="51">5" x 2"</a>
                      <a href="javascript:void(0);" class="item size" data-width-mm="127" data-height-mm="76">5" x 3"</a>
                      <a href="javascript:void(0);" class="item size" data-width-mm="203" data-height-mm="102">8" x 4"</a> -->
                      <?php 
                        $product_variations = st_get_product_variations($skye_sticker_global_product_used);
                        foreach($product_variations['attributes'] as $pos => $attribute) {
                          if ($attribute['name'] == 'pa_size') {
                            foreach($attribute['options'] as $index => $option) { ?>
                                <a href="javascript:void(0);" class="item size <?php echo ($index == 0) ? 'active':''; ?>" data-slug="<?php echo $option['name']; ?>"><?php echo $option['value']; ?></a>
                            <?php }
                          }
                        }
                        
                      ?>
                    </div>
                  </div>

                  <div class="sheet-sizes nodisplay" style="display: none;">
                    <a href="javascript:void(0);" class="item template active" data-template="none">Empty sheet</a>

                    <a href="javascript:void(0);" class="item template select-template" data-template="select">Select template<span class="caret"></span>
                      <div class="selected-template"></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-3 margin-bottom-sm">
              <div class="box-container-quantity-and-prices" id="box-quantity">
                <h4 class="margin-bottom-xs">Quantity
                  <img alt="Loader" src="https://d6ce0no7ktiq.cloudfront.net/images/web/loaders/light.gif" class="loader" width="16" height="16">
                </h4>

                <div class="box">
                  <div data-text-pcs=" pcs" id="getpcs">
                    <!-- <a href="javascript:void(0);" class="item quantity active" data-quantity="111" data-price="26" data-laser-price="" data-laser-save="">
                      <div class="qty">111 pcs</div>
                      <span class="price-formatted">$26</span>
                    </a>
                    <a href="javascript:void(0);" class="item quantity" data-quantity="200" data-price="46" data-laser-price="" data-laser-save="">
                      <div class="qty">200 pcs</div>
                      <span class="price-formatted">$46</span>
                    </a>
                    <a href="javascript:void(0);" class="item quantity" data-quantity="300" data-price="70" data-laser-price="" data-laser-save="">
                      <div class="qty">300 pcs</div>
                      <span class="price-formatted">$70</span>
                    </a>
                    <a href="javascript:void(0);" class="item quantity" data-quantity="500" data-price="78" data-laser-price="" data-laser-save="">
                      <div class="qty">500 pcs</div>
                      <span class="price-formatted">$78</span>
                      <div class="price-tag sm">
                        <div class="price">- 33%</div>
                      </div>
                    </a>
                    <a href="javascript:void(0);" class="item quantity" data-quantity="600" data-price="94" data-laser-price="" data-laser-save="">
                      <div class="qty">600 pcs</div>
                      <span class="price-formatted">$94</span>
                      <div class="price-tag sm">
                        <div class="price">- 33%</div>
                      </div>
                    </a>
                    <a href="javascript:void(0);" class="item quantity" data-quantity="900" data-price="100" data-laser-price="" data-laser-save="">
                      <div class="qty">900 pcs</div>
                      <span class="price-formatted">$100</span>
                      <div class="price-tag sm">
                        <div class="price">- 53%</div>
                      </div>
                    </a>
                    <a href="javascript:void(0);" class="item quantity" data-quantity="1200" data-price="134" data-laser-price="" data-laser-save="">
                      <div class="qty">1,200 pcs</div>
                      <span class="price-formatted">$134</span>
                      <div class="price-tag sm">
                        <div class="price">- 52%</div>
                      </div>
                    </a>
                    <a href="javascript:void(0);" class="item quantity" data-quantity="1500" data-price="167" data-laser-price="" data-laser-save="">
                      <div class="qty">1,500 pcs</div>
                      <span class="price-formatted">$167</span>
                      <div class="price-tag sm">
                        <div class="price">- 52%</div>
                      </div>
                    </a>
                    <a href="javascript:void(0);" class="item quantity" data-quantity="2000" data-price="191" data-laser-price="" data-laser-save="">
                      <div class="qty">2,000 pcs</div>
                      <span class="price-formatted">$191</span>
                      <div class="price-tag sm">
                        <div class="price">- 59%</div>
                      </div>
                    </a> -->
                    <?php 
                        $product_variations = st_get_product_variations($skye_sticker_global_product_used);
                        function sortByQty($a, $b) {
                          return $a['pa_quantity'] - $b['pa_quantity'];
                        }
                      
                        usort($product_variations['variations'], 'sortByQty');
                        
                        

                        foreach($product_variations['variations'] as $pos => $variation) {
                          $product = wc_get_product($variation['ID']);
                          $attribute = $product->get_attributes();
                          $unit_price = 0.234;
                          switch ($attribute['pa_size']) {
                            case "2-x-2":
                              $unit_price = 0.472;
                              break;
                            case "3-x-2":
                              $unit_price = 0.703;
                              break;
                            case "3-x-3":
                              $unit_price = 1.04;
                              break;
                            case "4-x-3":
                              $unit_price = 1.421;
                              break;
                            case "4-x-4":
                              $unit_price = 1.92;
                              break;
                            case "5-x-2":
                              $unit_price = 1.182;
                              break;
                            case "5-x-3":
                              $unit_price = 1.733;
                              break;
                            case "8-x-4":
                              $unit_price = 3.714;
                              break;
                            default:
                              $unit_price = 0.234;
                              break;
                          }
                          //calculate percentage
                          $normal_price = $unit_price * $product->get_attribute('pa_quantity');
                          $price = $product->get_price();
                          $percentage = (($normal_price - $price) / $normal_price) * 100;
                          ?>
                            <a href="javascript:void(0);" class="item quantity qty-size-<?php echo $attribute['pa_size']; ?> <?php echo ($pos == 0) ? 'active':''; ?>" data-quantity="<?php echo $product->get_attribute('pa_quantity'); ?>" data-price="<?php echo $product->get_price(); ?>" data-product="<?php echo $variation['ID']; ?>" data-laser-price="" data-laser-save="">
                              <div class="qty"><?php echo number_format($product->get_attribute('pa_quantity')); ?> pcs</div>
                              <span class="price-formatted">$<?php echo $product->get_price(); ?></span>
                              <?php if (abs($percentage) > 30) { ?>
                              <div class="price-tag sm">
                                <div class="price"><?php echo (round($percentage) > 0) ? -round($percentage):round($percentage); ?>%</div>
                              </div>
                              <?php } ?>
                            </a>
                          <?php
                        }
                        
                      ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-5 col-md-4">
              <h4 class="margin-bottom-xs">Material</h4>
              <div class="box box-materials margin-bottom-sm" data-title-if-item-not-available="">
                <a href="javascript:void(0);" class="item material active" data-value="glossy_coated" data-machine="" data-original-title="" title="">
                  <span class="material-preset-title">Vinyl stickers</span>
                  <span class="label label-success">Bestseller</span>
                </a>

                <!-- <a href="javascript:void(0);" id="materials-btn" class="item" data-original-title="" title="">
                  Special materials <span class="caret"></span>
                </a> -->
              </div>
              <br><br>
              <div id="summary">
                <div class="alert alert-danger nodisplay margin-bottom-sm"></div>

                <div class="box square-back-info margin-bottom-sm nodisplay">
                  <a href="#laser-info" data-toggle="modal" class="pull-right nowrap btn btn-default btn-xs">
                    What's this? </a>
                  This material is delivered on square back paper
                </div>

                <div class="box square-back-select nodisplay">
                  <div class="title">
                    <strong>Save <span class="save-total"></span></strong>
                    <a href="#laser-info" data-toggle="modal" class="pull-right nowrap">
                      What's this? </a>
                  </div>
                  <div class="checkbox">
                    <label for="square-back">
                      <input type="checkbox" name="square_back" id="square-back">
                      Square back paper <strong class="pull-right"><span class="total-price"><img alt="Loader" src="https://d6ce0no7ktiq.cloudfront.net/images/web/loaders/light.gif" width="16" height="16"></span></strong>
                    </label>
                  </div>
                </div>

                <!-- <a href="javascript:void(0);" class="fileinput-button btn btn-primary btn-block btn-xl nodisplay" data-loading-text="Loading...">
                  Upload file <span class="glyphicon glyphicon-menu-right"></span>
                  <input type="file" name="files[]" accept="image/jpeg, image/png, image/gif, application/pdf, application/postscript, image/svg+xml, image/bmp, image/x-windows-bmp, application/psd, application/x-photoshop, image/photoshop, image/psd, image/x-photoshop, image/x-psd, .psd, image/tiff">
                </a> -->
                <button type="button" id="btnNext" class="btn btn-xl btn-primary btn-block button button-primary alt" data-loading-text="Loading..." style="margin-top: 0;">
                  Next <span class="glyphicon glyphicon-menu-right"></span>
                </button>

                <div class="progress progress-striped active nodisplay" style="margin-top:15px;">
                  <div class="progress-bar" style="width: 1%"></div>
                </div>
                <!-- <small class="margin-top-xs pull-left">PDF, PNG, JPG, SVG, TIF, GIF, BMP, AI, PSD</small> -->
              </div>

              <div class="modal" id="laser-info" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title">What's this?</h4>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-sm-6">
                          <img alt="Digital sticker" data-original="https://d6ce0no7ktiq.cloudfront.net/images/web/materials/digital-sticker.png" class="img-responsive lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                          <h4>Without square back</h4>
                          <ul>
                            <li>Starting at $26</li>
                            <li>Fastest turnaround on smaller orders</li>
                          </ul>
                        </div>

                        <div class="col-sm-6">
                          <img alt="Laser sticker" data-original="https://d6ce0no7ktiq.cloudfront.net/images/web/materials/laser-sticker.png" class="img-responsive lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                          <h4>With square back</h4>
                          <ul>
                            <li>Save 15% on larger orders</li>
                            <li>Fastest turnaround on larger orders</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div id="summary">
        <div class="alert alert-danger nodisplay margin-bottom-sm"></div>
    
        <div class="box square-back-info margin-bottom-sm nodisplay">
            <a href="#laser-info" data-toggle="modal" class="pull-right nowrap btn btn-default btn-xs">
                What's this?        </a>
            This material is delivered on square back paper    </div>
    
        <div class="box square-back-select nodisplay">
            <div class="title">
                <strong>Save <span class="save-total"></span></strong>
                <a href="#laser-info" data-toggle="modal" class="pull-right nowrap">
                    What's this?            </a>
            </div>
            <div class="checkbox">
                <label for="square-back">
                    <input type="checkbox" name="square_back" id="square-back">
                    Square back paper                <strong class="pull-right"><span class="total-price"><img alt="Loader" src="https://d6ce0no7ktiq.cloudfront.net/images/web/loaders/light.gif" width="16" height="16"></span></strong>
                </label>
            </div>
        </div>
    
                    <a href="javascript:void(0);" class="fileinput-button btn btn-primary btn-block btn-xl nodisplay" data-loading-text="Loading...">
                    Upload file                <span class="glyphicon glyphicon-menu-right"></span>
                    <input type="file" name="files[]" accept="image/jpeg, image/png, image/gif, application/pdf, application/postscript, image/svg+xml, image/bmp, image/x-windows-bmp, application/psd, application/x-photoshop, image/photoshop, image/psd, image/x-photoshop, image/x-psd, .psd, image/tiff">
                </a>
                    <button type="submit" class="btn btn-xl btn-primary btn-block" data-loading-text="Loading..." style="margin-top: 0;">
            Next        <span class="glyphicon glyphicon-menu-right"></span>
        </button>
    
        <div class="progress progress-striped active nodisplay" style="margin-top:15px;">
            <div class="progress-bar" style="width: 1%"></div>
        </div>
                    <small class="margin-top-xs pull-left">PDF, PNG, JPG, SVG, TIF, GIF, BMP, AI, PSD</small>
                </div>
    
     -->
            <div class="modal modal-large modal-sticker-wizard-templates">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Select template</h4>
                  </div>
                  <div class="modal-body">
                    <img alt="Loader" src="https://d6ce0no7ktiq.cloudfront.net/images/web/loaders/light.gif" width="16" height="16">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <input type="hidden" id="getShape" value="">
      <input type="hidden" id="getSize" value="" data-width="" data-height="">
      <input type="hidden" id="getQty" value="">
      <input type="hidden" id="getPrice" value="">
      <input type="hidden" id="getProduct" value="">

      

</div>

<br><br>

<?php get_footer(); ?>