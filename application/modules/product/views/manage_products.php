<?php $this->load->view($button_view); ?>
<section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                        <?php echo $this->session->flashdata('cat_success'); ?>
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table table-striped dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Category</th>
                                                        <th>Sub-category</th>
                                                        <th>Brand</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        <th>Color</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>TV</td>
                                                        <td>LED</td>
                                                        <td>Edinburgh</td>
                                                        <td>Sony</td>
                                                        <td>200</td>
                                                        <td>2</td>
                                                        <td>Red</td>
                                                        <td>
                                                            <a href="">Edit</a>
                                                            <a href="">Delete</a>
                                                            <a href="">Details</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>