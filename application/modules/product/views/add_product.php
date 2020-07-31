<?php $this->load->view($button_view); ?>
<section id="basic-input">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Product</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Choose Category</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>Cat One</option>
                                                        <option>Cat two</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Choose Sub Category</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>Sub Cat One</option>
                                                        <option>Sub Cat two</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Product Name</label>
                                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter Sub Category">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Select Brand</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>brand One</option>
                                                        <option>Brand two</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Product Quantity</label>
                                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter Sub Category">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Unit</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>Kg</option>
                                                        <option>Number</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Price Per Unit</label>
                                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter Sub Category">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Choose Colour</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>Red</option>
                                                        <option>Green</option>
                                                    </select>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="disabledInput">Discription</label>
                                                        <fieldset class="form-group">
                                                            <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Sub Category Description"></textarea>
                                                        </fieldset>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-8">
                                                <button class="btn btn-lg btn-danger">Add Sub Category</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>