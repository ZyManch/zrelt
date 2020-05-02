<?php
/**
 * Created by PhpStorm.
 * User: ZyManch
 * Date: 15.03.2020
 * Time: 8:33
 * @var $this \yii\web\View
 * @var $context \module\design\section\AdvancedSearchBox
 */
$context = $this->context;
?>
<section class="advance-search-box">
    <div class="search-box-inner">
        <div class="container">
            <div class="search-box map">
                <ul class="nav nav-pills">
                    <li class="active"><a href="#search-form-sale" data-toggle="tab">Sale</a></li>
                    <li><a href="#search-form-rent" data-toggle="tab">Rent</a></li>
                </ul>
                <hr>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="search-form-sale"> <a class="advanced-search-toggle" data-toggle="collapse" data-parent="#accordion" href="#advanced-search-sale">Advanced Sale Search <i class="fa fa-plus"></i></a>
                        <form role="form" id="form-map-sale" class="form-map form-search clearfix has-dark-background">
                            <div id="advanced-search-sale" class="panel-collapse collapse">
                                <div class="advanced-search">
                                    <header>
                                        <h3>Property Features</h3>
                                    </header>
                                    <ul class="submit-features">
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Air conditioning</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Bedding</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Heating</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Internet</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Microwave</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Smoking allowed</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Use of pool</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Toaster</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Coffee pot</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Cable TV</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Parquet</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Roof terrace</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Terrace</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Balcony</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Iron</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Hi-Fi</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Beach</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Garage</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <select name="form-sale-country">
                                            <option value="">Country</option>
                                            <option value="1">France</option>
                                            <option value="2">Great Britain</option>
                                            <option value="3">Spain</option>
                                            <option value="4">Russia</option>
                                            <option value="5">United States</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <select name="form-sale-city">
                                            <option value="">City</option>
                                            <option value="1">New York</option>
                                            <option value="2">Los Angeles</option>
                                            <option value="3">Chicago</option>
                                            <option value="4">Houston</option>
                                            <option value="5">Philadelphia</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <select name="form-sale-district">
                                            <option value="">District</option>
                                            <option value="1">Manhattan</option>
                                            <option value="2">The Bronx</option>
                                            <option value="3">Brooklyn</option>
                                            <option value="4">Queens</option>
                                            <option value="5">Staten Island</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <select name="form-sale-property-type">
                                            <option value="">Property Type</option>
                                            <option value="1">Apartment</option>
                                            <option value="2">Condominium</option>
                                            <option value="3">Cottage</option>
                                            <option value="4">Flat</option>
                                            <option value="5">House</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <select name="form-sale-price">
                                            <option value="">Price</option>
                                            <option value="1">$10,000 +</option>
                                            <option value="2">$50,000 +</option>
                                            <option value="3">$100,000 +</option>
                                            <option value="4">$500,000 +</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default">Search Sale</button>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                            </div>
                        </form>
                        <!-- /#form-map-sale -->
                    </div>
                    <!-- /#search-form-rent -->
                    <div class="tab-pane fade" id="search-form-rent">
                        <form role="form" id="form-map-rent" class="form-map form-search clearfix">
                            <div class="row">
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <select name="form-rent-city">
                                            <option value="">City</option>
                                            <option value="1">New York</option>
                                            <option value="2">Los Angeles</option>
                                            <option value="3">Chicago</option>
                                            <option value="4">Houston</option>
                                            <option value="5">Philadelphia</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <select name="form-rent-district">
                                            <option value="">District</option>
                                            <option value="1">Manhattan</option>
                                            <option value="2">The Bronx</option>
                                            <option value="3">Brooklyn</option>
                                            <option value="4">Queens</option>
                                            <option value="5">Staten Island</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <select name="form-rent-property-type">
                                            <option value="">Property Type</option>
                                            <option value="1">Apartment</option>
                                            <option value="2">Condominium</option>
                                            <option value="3">Cottage</option>
                                            <option value="4">Flat</option>
                                            <option value="5">House</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <select name="form-rent-payment">
                                            <option value="">Payment</option>
                                            <option value="1">Monthly</option>
                                            <option value="2">Quarterly</option>
                                            <option value="3">Yearly</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <select name="form-rent-price">
                                            <option value="">Price</option>
                                            <option value="1">$100 +</option>
                                            <option value="2">$500 +</option>
                                            <option value="2">$1000 +</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default">Search Rent</button>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                            </div>
                        </form>
                        <!-- /#form-map-rent -->
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.search-box -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.search-box-inner -->
</section>