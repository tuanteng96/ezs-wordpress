<?php

/**
Template Name: Bảng giá
 */

get_header();
?>
<div id="main">
    <div class="inner-wrap">
    </div>
    <div id="price-list" class="pt-5">
        <div class="container">
            <h1>Bảng giá</h1>
            <ul class="nav nav-tabs d-flex" role="tablist">
                <li role="presentation"><a href="#uu-dai" aria-controls="uu-dai" class="active show" role="tab" data-toggle="tab">Ưu
                        đãi</a></li>
                <li role="presentation"><a href="#niem-yet" aria-controls="niem-yet" role="tab" data-toggle="tab">Niêm
                        yết</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="niem-yet">
                    <!-- <h3>Bảng giá niêm yết </h3> -->
                    <table class="table table-bordered listed-price">
                        <thead>
                            <tr>
                                <th scope="col" class="d-none d-md-table-cell">STT</th>
                                <th scope="col">HẠNG MỤC</th>
                                <th scope="col">NĂM ĐẦU</th>
                                <th scope="col">NĂM TIẾP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="d-none d-md-table-cell">1</td>
                                <td class="table-more-infor">
                                    <strong>Phí khởi tạo</strong> <br>
                                    + Phần mềm quản lý spa <br>
                                    + App khách hàng thương hiệu riêng 2 phiên bản android và IOS <br>
                                    + Khởi tạo website giới thiệu Spa/ thẩm mỹ viện với tên miền riêng
                                </td>
                                <td class="value-first" value="30000000">30.000.000</td>
                                <td class="value-second" value="0">Miễn phí</td>
                            </tr>
                            <tr>
                                <td rowspan="5" class="d-none d-md-table-cell">2</td>
                                <td colspan="3" class="table-more-infor">
                                    <strong>Phí duy trì hàng năm</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-more-infor table-select">Phí đăng ký tên miền
                                    <span>.com</span><select class="form-select" aria-label="Default select example">
                                        <option value="300.000" value-real-first="300000" value-real-second="300000">.com</option>
                                        <option value="550.000" value-real-first="550000" value-real-second="460000">.vn</option>
                                        <option value="450.000" value-real-first="450000" value-real-second="360000">.com.vn</option>
                                    </select>
                                </td>
                                <td class="value-first" value="300000">300.000</td>
                                <td class="value-second" value="300000">300.000</td>
                            </tr>
                            <tr>
                                <td class="table-more-infor">Phí chứng chỉ bảo mật tên miền [ SSL ]</td>
                                <td class="value-first" value="200000">200.000</td>
                                <td class="value-second" value="200000">200.000</td>
                            </tr>
                            <tr>
                                <td class="table-more-infor">Phí tài khoản appstore [99$]</td>
                                <td class="value-first" value="2400000">2.400.000</td>
                                <td class="value-second" value="2400000">2.400.000</td>
                            </tr>
                            <tr>
                                <td class="table-more-infor basis">Phí duy trì hệ thống <span>[ 1 cơ sở ]</span>
                                    <input type="number" placeholder="Số lượng">
                                </td>
                                <td class="value-first" value="3000000">3.000.000</td>
                                <td class="value-second" value="3000000">3.000.000</td>
                            </tr>
                            <tr class="price-total">
                                <td class="d-none d-md-table-cell">3</td>
                                <td class="table-more-infor"><strong>Tổng</strong></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>(*) Chi phí trên chưa bao gồm Thuế & chi phí thiết bị</p>
                </div>
                <div role="tabpanel" class="tab-pane active" id="uu-dai">
                    <!-- <h3>Bảng giá ưu đãi</h3> -->
                    <table class="table table-bordered listed-price">
                        <thead>
                            <tr>
                                <th scope="col" class="d-none d-md-table-cell">STT</th>
                                <th scope="col">HẠNG MỤC</th>
                                <th scope="col">NĂM ĐẦU</th>
                                <th scope="col">NĂM TIẾP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="d-none d-md-table-cell">1</td>
                                <td class="table-more-infor">
                                    <strong>Phí khởi tạo</strong> <br>
                                    + Phần mềm quản lý spa <br>
                                    + App khách hàng thương hiệu riêng 2 phiên bản android và IOS <br>
                                    + Khởi tạo website giới thiệu Spa/ thẩm mỹ viện với tên miền riêng
                                </td>
                                <td class="value-first sale-price" value="19500000"><span>30.000.000</span><br>19.500.000</td>
                                <td class="value-second" value="0">Miễn phí</td>
                            </tr>
                            <tr>
                                <td rowspan="5" class="d-none d-md-table-cell">2</td>
                                <td colspan="3" class="table-more-infor">
                                    <strong>Phí duy trì hàng năm</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-more-infor table-select">Phí đăng ký tên miền
                                    <span>.com</span><select class="form-select
                                            aria-label=" Default select example">
                                        <option value="300.000" value-real-first="300000" value-real-second="300000">.com</option>
                                        <option value="550.000" value-real-first="550000" value-real-second="460000">.vn</option>
                                        <option value="450.000" value-real-first="450000" value-real-second="360000">.com.vn</option>
                                    </select>
                                </td>
                                <td class="value-first" value="300000">300.000</td>
                                <td class="value-second" value="300000">300.000</td>
                            </tr>
                            <tr>
                                <td class="table-more-infor">Phí chứng chỉ bảo mật tên miền [ SSL ]</td>
                                <td class="sale-price value-first" value="0">
                                    <span>200.000</span><br>Miễn phí
                                </td>
                                <td class="sale-price value-second" value="0">
                                    <span>200.000</span><br>Miễn phí
                                </td>
                            </tr>
                            <tr>
                                <td class="table-more-infor">Phí tài khoản appstore [99$] <br>
                                    Miễn phí duy trì app trên tài khoản chung của công ty EZS</td>
                                <td class="sale-price value-first" value="0">
                                    <span>2.400.000</span><br>Miễn phí
                                </td>
                                <td class="sale-price value-second" value="0">
                                    <span>2.400.000</span><br>Miễn phí
                                </td>
                            </tr>
                            <tr>
                                <td class="table-more-infor basis">Phí duy trì hệ thống <span>[ 1 cơ sở ]</span>
                                    <input type="number" placeholder="Số lượng">
                                </td>
                                <td class="value-first" value="3000000">3.000.000</td>
                                <td class="value-second" value="3000000">3.000.000</td>
                            </tr>
                            <tr class="price-total">
                                <td class="d-none d-md-table-cell">3</td>
                                <td class="table-more-infor"><strong>Tổng</strong></td>
                                <td class=""></td>
                                <td class=""></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>(*) Chi phí trên chưa bao gồm Thuế & chi phí thiết bị</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();