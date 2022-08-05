<?php

/**
Template Name: Chi tiết chức năng
 */

get_header();
?>
<div id="main">
    <div class="inner-wrap">
    </div>
    <div class="inner-wrap-title text-center">
        <div class="container">
            <div class="inner-wrap_content">
                <h1>Chi tiết chức năng</h1>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/pattern-4.png" alt="logo">
    </div>
    <div id="function" class="pt-5">
        <h1>Chi tiết chức năng</h1>
        <div class="function-nav">
            <div id="function-nav">
                <p class="active" to="function-setting">CÀI ĐẶT</p>
                <p to="management-pos">QUẢN LÝ</p>
                <p to="function-website">WEB</p>
                <p to="function-app">APP</p>
                <p to="function-report">BÁO CÁO</p>
                <p to="function-devices">THIẾT BỊ</p>
            </div>
        </div>
        <div class="container">

            <div id="function-setting">
                <h3 title="function-setting">I. CÀI ĐẶT</h3>
                <table class="table table-bordered table-detail">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">MÔ TẢ</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3" class="text-center" class="a">1.1 CÀI ĐẶT HỆ THỐNG</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="5">1.1.1</th>
                            <td colspan="2">Quản lý thông tin</td>
                        </tr>
                        <tr>
                            <td>Thông tin cơ bản của thương hiệu</td>
                            <td>Tên thương hiệu, địa chỉ, logo, hotline, Email, Fanpage v..v</td>
                        </tr>
                        <tr>
                            <td>Cài đặt máy in & Mẫu in</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Thông tin hệ thống</td>
                            <td>Cấu hình kết nối hệ thống đến App, Google v..v</td>
                        </tr>
                        <tr>
                            <td>Cài đặt thanh toán</td>
                            <td>Các tài khoản ngân hàng<br>
                                Các thông số để kết nối thanh toán tự động</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">1.1.2</th>
                            <td colspan="2">Quản lý cơ sở</td>
                        </tr>
                        <tr>
                            <td>Quản lý và tạo mới các điểm kinh doanh ( chi nhánh SPA )</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="5">1.1.3</th>
                            <td colspan="2">Quản lý nhân viên</td>

                        </tr>
                        <tr>
                            <td>Quản lý nhân viên</td>
                            <td>- Danh sách nhân viên<br>- Chỉnh sửa thông tin / tài khoản / mật khẩu<br>- Vô hiệu
                                hóa
                                tài khoản<br>- Thêm mới nhân viên</td>
                        </tr>
                        <tr>
                            <td>Quản lý Lương và chính sách</td>
                            <td>- Quản lý cấp bậc (Thử việc / nhân viên / chuyên gia )<br>- Quản lý phụ cấp<br>- Cấu
                                hình giữ lương<br>- Cấu hình ngày nghỉ / ngày công<br>- Cấu hình ngày phép / tháng
                            </td>
                        </tr>
                        <tr>
                            <td>Quản lý phân quyền</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>KPI doanh số</td>
                            <td>- Cấu hình KPI doanh số cho chung hoặc riêng từng nhân viên</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">1.1.4</th>
                            <td colspan="2">Quản lý nhãn hàng</td>
                        </tr>
                        <tr>
                            <td>Quản lý các thương hiệu sản phẩm / mỹ phẩm</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">1.1.5</th>
                            <td colspan="2">Quản lý phân loại</td>
                        </tr>
                        <tr>
                            <td>Quản lý phân chia các nhóm sản phẩm, nhóm dịch vụ </td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="6">1.1.6</th>
                            <td colspan="2">Quản lý SP/DV</td>
                        </tr>
                        <tr>
                            <td>Quản lý sản phẩm</td>
                            <td>- Quản lý sản phẩm theo từng cơ sở<br>
                                - Quản lý sản phẩm theo nhãn hàng<br>
                                - Quản lý sản phẩm theo nhóm phân loại<br>
                                - Quản lý thông tin: Tên / mã / đơn vị / giá bán<br>
                                - Cài đặt sản phẩm combo ( 1 sản phẩm gồm 2 SP A + 1 DV B )<br>
                                - Quản lý hoa hồng bán hàng ( nhân viên nhận được khi tư vấn )<br>
                                - Thời gian sử dụng dự kiến ( Thông báo khi khách dùng gần hết để tư vấn bán tiếp
                                )<br>
                                - Quản lý thông tin cho web / app: Có hiển thị hay không?, Hình ảnh, Thông tin sản
                                phẩm,
                                Option lựa chọn, Có hiển thị giá hay không?, sắp xếp thứ tự<br>
                            </td>
                        </tr>
                        <tr>
                            <td>Quản lý buổi lẻ / thẻ liệu trình</td>
                            <td>
                                - Quản lý dịch vụ theo cơ sở<br>
                                - Quản lý dịch vụ theo nhóm phân loại<br>
                                - Quản lý lương nhân viên <br>
                                <div class="pl-30">
                                    + Theo số tiền hoặc theo % giá bán <br>
                                    + Cấu hình chung / khác nhau giữa các cấp bậc nhân viên<br>
                                    + Cấu hính giảm lương dịch vụ khi ưu đãi lớn<br>
                                </div>
                                - Cấu hình đặt lịch tự động sau bao nhiêu ngày ( khi hoàn thành buổi này sẽ tự động
                                đặt
                                lịch buổi sau cho khách hàng )<br>
                                - Quản lý buổi lẻ / thẻ liệu trình của dịch vụ ( các lựa chọn khách hàng có thể mua
                                )<br>
                                <div class="pl-30">
                                    + Tên / Giá bán<br>
                                    + Số lượng buổi <br>
                                    + Số phút / buổi<br>
                                    + Dịch vụ có bảo hành / số buổi + Thời gian bảo hành<br>
                                    + Hoa hồng bán hàng<br>
                                    + Thời hạn sử dụng của thẻ từ ngày mua<br>
                                </div>
                                - Quản lý định mức nguyên liệu sử dụng / các buổi<br>
                                - Quản lý thông tin cho web / app: Có hiển thị hay không?, Hình ảnh, Thông tin sản
                                phẩm,
                                Có hiển thị giá hay không?, sắp xếp thứ tự<br>
                                - Hỗ trợ quản lý phác đồ điều trị ( Combo các dịch vụ để điều trị theo 1 tình trạng
                                riêng của khách hàng ); Tạo combo trực tiếp tại Pos quản lý khi khách hàng mua dịch
                                vụ
                                phác đồ điều trị<br>
                                - Quản lý tin nhắn chăm sóc tự động sau mỗi buổi dịch vụ ( thẻ liệu trình )<br>
                            </td>
                        </tr>
                        <tr>
                            <td>Quản lý thẻ tiền</td>
                            <td>- Quản lý thẻ tiền theo cơ sở<br>
                                - Quản lý thông tin: Tên / mã / giá bán <br>
                                - Hoa hồng bán hàng<br>
                                - Chi tiết thẻ tiền <br>
                                <div class="pl-30">
                                    + Tổng số tiền được chi tiêu<br>
                                    + Số tiền được sử dụng cho sản phẩm / sử dụng dịch vụ<br>
                                    + Không giới hạn sản phẩm / dịch vụ<br>
                                    + Giới hạn chi tiêu:<br>
                                    <ul class="pl-30 table-list-dot">
                                        <li>Không bắt buộc thanh toán hết thẻ tiền</li>
                                        <li>Chi tiêu thẻ tiền theo hạn mức thanh toán</li>
                                    </ul>
                                </div>
                                <div class="pl-30">
                                    + Giới hạn thời hạn thẻ tiền ( hạn dùng )<br>
                                </div>
                                - Quản lý thông tin cho web / app: Có hiển thị hay không?, Hình ảnh, Thông tin sản
                                phẩm,
                                Có hiển thị giá hay không?, sắp xếp thứ tự.<br>
                            </td>
                        </tr>
                        <tr>
                            <td>Quản lý phụ phí<br>
                                Ví dụ: Phụ phí làm ngoài giờ: <br>
                                Khách phải trả thêm chi phí ( giá bán ), hoa hồng cho nhân viên bán và tiền dịch vụ
                                dành
                                cho nhân viên )</td>
                            <td>- Quản lý phụ phí theo cơ sở<br>
                                - Quản lý phụ phí theo nhóm phân loại<br>
                                - Quản lý thông tin: Tên / mã / giá bán<br>
                                - Giá bán / Lương nhân viên / Hoa hồng bán hàng</td>
                        </tr>
                        <tr>
                            <td scope="row">Quản lý Nguyên vật liệu</td>
                            <td>- Quản lý phụ phí theo cơ sở

                                - Quản lý nguyên vật liệu theo nhóm phân loại

                                - Cấu hình chuyển đổi nguyên liệu từ sản phẩm ( mở sản phẩm ra làm nguyên liệu hoặc
                                đóng
                                chai bán thành phẩm )

                                - Cho phép quản lý bán nguyên liệu trong trường hợp KH mua trực tiếp</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center">1.2 QUẢN LÝ QUYỀN LỢI KHÁCH HÀNG</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">1.2.1</th>
                            <td colspan="2">Nhóm – cấp bậc khách hàng</td>
                        </tr>
                        <tr>
                            <td>Phân loại khách hàng theo cấp bậc<br>
                                <ul class="pl-30 table-list-dot">
                                    <li>Khách thường</li>
                                    <li>Khách vip</li>
                                    <li>Có thể tự cấu hình</li>
                                </ul>
                            </td>
                            <td>- Quản lý danh sách nhóm khách hàng<br>
                                - Điều kiện lên cấp ( tổng số tiền chi tiêu vượt ngưỡng )<br>
                                - Cấu hình tự động lên cấp / hạ cấp / Nội dung chúc mừng lên cấp<br>
                                - Cấu hình cách tính ngưỡng: Theo hệ số của mua sản phẩm và hệ số sử dụng dịch vụ
                                <br>
                                - Cài đặt quyền lợi của nhóm: ưu đãi giảm giá khi mua hàng
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">1.2.2</th>
                            <td colspan="2">Tích lũy khi mua hàng</td>
                        </tr>
                        <tr>
                            <td>
                                Mua hàng hoàn tiền<br>
                                Tiền sẽ được hoàn vào ví điện tử ( nội bộ của riêng SPA – không liên quan đến bên
                                thứ 3
                                nào ) cho khách hàng và khách hàng có thể thanh toán cho các sản phẩm dịch vụ tiếp
                                theo
                                từ ví này
                            </td>
                            <td>
                                - Cài đặt mức hoàn tiền cho tất cả sản phẩm, dịch vụ hay 1 nhóm phân loại hay 1 sản
                                phẩm, dịch vụ cụ thể<br>
                                - Cài đặt chính sách riêng cho từng nhóm cấp bậc khách hàng<br>
                                - Cài đặt mức hoàn tiền cụ thể riêng biệt khi mua nguyên giá và khi đã mua giảm
                                giá.<br>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">1.2.3</th>
                            <td colspan="2">Affiliate Marketing</td>
                        </tr>
                        <tr>
                            <td>
                                Nhận hoa hồng khi giới thiệu khách hàng<br>
                                Tiền sẽ được hoàn vào ví điện tử ( như mục 1.2.2 )
                            </td>
                            <td>
                                - Cài đặt mức hoa hồng cho tất cả sản phẩm, dịch vụ hay 1 nhóm phân loại hay 1 sản
                                phẩm,
                                dịch vụ cụ thể<br>
                                - Cài đặt chính sách riêng cho từng nhóm cấp bậc khách hàng<br>
                                - Cài đặt mức hoa hồng cụ thể riêng biệt khi mua nguyên giá và khi đã mua giảm
                                giá.<br>
                                - Hỗ trợ áp dụng qua việc gửi link website ( đơn hàng phát sinh từ website sẽ được
                                tính
                                hoa hồng cho người gửi ) & Tặng mã giảm giá cho người khác ( mã giảm giá được sử
                                dụng,
                                người tặng mã sẽ được hưởng hoa hồng )
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="5">1.2.4</th>
                            <td colspan="2">Quyền lợi khác</td>
                        </tr>
                        <tr>
                            <td>
                                Đăng nhập lần đầu
                            </td>
                            <td>
                                Tặng tiền vào ví và mã giảm giá
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Đăng ký tài khoản
                            </td>
                            <td>
                                Tặng tiền vào ví và mã giảm giá
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Quyền lợi tháng sinh nhật
                            </td>
                            <td>
                                Tặng tiền vào ví và tặng mã giảm giá
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Quyền lợi đúng ngày sinh nhật
                            </td>
                            <td>
                                Tặng tiền vào ví và tặng mã giảm giá
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center">1.3 CHƯƠNG TRÌNH KHUYẾN MẠI – VOUCHER/COUPON</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">1.3.1</th>
                            <td colspan="2">Chương trình khuyến mại</td>
                        </tr>
                        <tr>
                            <td>Chương trình khuyến mại</td>
                            <td>
                                - Cài đặt chương trình khuyến mại theo thời gian<br>
                                - Cài đặt giá trị giảm của chương trình ưu đãi<br>
                                - Cài đặt tặng thêm buổi cho các dịch vụ<br>
                                - Cài đặt chương trình ưu đãi theo cơ sở<br>
                                - Cài đặt chương trình ưu đãi cho riêng tứng nhóm cấp bậc khách hàng
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="3">1.3.2</th>
                            <td colspan="2">Voucher giảm giá và Coupon tiền mặt ( voucher tiền
                                mặt )
                            </td>
                        </tr>
                        <tr>
                            <td>Voucher giảm giá và Coupon tiền mặt ( voucher tiền
                                mặt )</td>
                            <td>
                                - Cài đặt Giá trị giảm giá (%) hoặc số tiền cố định<br>
                                - Cài đặt theo thời hạn sử dụng ( từ ngày đến ngày )<br>
                                - Số lần sử dụng tối đa<br>
                                - Mỗi khách hàng sử dụng tối đa bao nhiêu lần<br>
                                - Điều kiện áp dụng kèm chương trình ưu đãi: có / không<br>
                                - Đối tượng sản phẩm, dịch vụ được áp dụng<br>
                                - Đối tượng khách hàng được sử dụng: Nhóm khách hàng hoặc từng KH cụ thể<br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="management-pos">
                <h3 title="management-pos">II. QUẢN LÝ </h3>
                <table class="table table-bordered table-detail">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">MÔ TẢ</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3" class="text-center" class="a">2.1 POS QUẢN LÝ TẠI ĐIỂM</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="3">2.1.1</th>
                            <td colspan="2">Quản lý khách hàng</td>
                        </tr>
                        <tr>
                            <td>
                                Quản lý danh sách hàng
                            </td>
                            <td>
                                Lọc khách hàng theo các tiêu chí: <br>
                                - Thông tin: Tên, điện thoại, Email <br>
                                - Theo danh mục sản phẩm / dịch vụ đã mua<br>
                                - Theo nhóm cấp bậc khách hàng<br>
                                - Theo nhân viên chăm sóc<br>
                                - Theo cơ sở<br>
                                - Theo nguồn khách<br>
                                - Khách hàng đã cài app hay chưa ( đăng nhập với thiết bị nào )
                            </td>
                        </tr>
                        <tr>
                            <td>Quản lý thông tin khách hàng</td>
                            <td>
                                - Thông tin cơ bản: Tên / ngày sinh / giới tính / Điện thoại / Email<br>
                                - Thông tin địa chỉ: Địa chỉ / quận huyện / thành phố<br>
                                - Hình ảnh: tích hợp kết nối camera nhận diện khuôn mặt<br>
                                - Nguồn khách hàng / nhân viên phụ trách<br>
                                - Thẻ từ, thẻ mã vạch khách hàng thân thiết<br>
                                - Nhóm khách hàng & Nội dung ghi chú<br>
                                - Mật khẩu đăng nhập web / app
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="14">2.1.2</th>
                            <td colspan="2">Thao tác nghiệp vụ khách hàng</td>
                        </tr>
                        <tr>
                            <td>Đổi mật khẩu login cho khách hàng</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Gửi thông báo APP đến khách hàng</td>
                            <td>Tin nhắn miễn phí qua APP</td>
                        </tr>
                        <tr>
                            <td>Bật mã QR code </td>
                            <td>Khách hàng mở APP quét QR code để login nhanh</td>
                        </tr>
                        <tr>
                            <td>Check in / Check out khách hàng</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tạo đơn hàng cho khách</td>
                            <td>
                                - Chọn sản phẩm / dịch vụ<br>
                                - Điều chỉnh giá nếu cần<br>
                                - Nhập mã giảm giá nếu KH cung cấp<br>
                                - Thanh toán đơn hàng ( tiền mặt / quẹt thẻ / chuyển khoản / ví và thẻ tiền ) (* Hỗ
                                trợ
                                mở QR code để khách quét thanh toán nhanh )<br>
                                - In hóa đơn<br>
                                - Cài đặt hoa hồng cho nhân viên ( Hỗ trợ thưởng hoa hồng tự động )<br>
                                - Cài đặt doanh số đơn hàng cho nhân viên ( cuối tháng tổng kết tính KPI & Thưởng
                                thêm
                                )<br>
                                - Bật mã QRcode giúp khách hàng thanh toán chuyển khoản nhanh ( quét mã QRcode bằng
                                ứng
                                dụng ngân hàng giúp khách nhập sẵn số tiền cần chuyển, số tài khoản người nhận, ngân
                                hàng và nội dung chuyển khoản )
                            </td>
                        </tr>
                        <tr>
                            <td>Cài đặt phác đồ điều trị</td>
                            <td>
                                - Cho phép tùy chỉnh những phác đồ riêng cho từng khách hàng – tùy theo thực trạng
                                của
                                từng khách hàng để set những combo điều trị riêng.
                            </td>
                        </tr>
                        <tr>
                            <td>Xử lý đơn hàng từ Web / App</td>
                            <td>- Nhận đơn hàng online từ khách hàng <br>
                                - Hoàn thành hoặc hủy đơn hàng Online ( Có tin nhắn App miễn phí thông báo đến khách
                                hàng )<br>
                                - Xác nhận thanh toán tự động khi khách hàng chuyển khoản</td>
                        </tr>
                        <tr>
                            <td>Quản lý đơn hàng</td>
                            <td>
                                - Quản lý danh sách và thông tin chi tiết các đơn hàng <br>
                                - Thanh toán nợ cho các đơn hàng<br>
                                - Khóa nợ đơn hàng / tặng đơn hàng<br>
                                - Trả hàng: Cho phép khấu trừ tích lũy, affliate, hoa hồng và doanh số nhân
                                viên.<br>
                                - Xóa đơn hàng ( chỉ thao tác xóa trong ngày )
                            </td>
                        </tr>
                        <tr>
                            <td>Quản lý thẻ dịch vụ</td>
                            <td>
                                - Quản lý thẻ dịch vụ theo nhóm: Đang kích hoạt / Thẻ bảo hành / Thẻ đã dùng hết và
                                thẻ
                                đã hết hạn<br>
                                - Tích buổi cho khách:<br>
                                <div class="pl-30">
                                    + Làm tại cơ sở nào<br>
                                    + Làm thời gian nào<br>
                                    + Có sử dụng phụ phí gì không?<br>
                                    + Nhân viên thực hiện ( có thể thêm nhiều nhân viên )<br>
                                    + Lương dịch vụ của nhân viên<br>
                                </div>
                                - Hỗ trợ in phiếu dịch vụ<br>
                                - Lưu trữ hình ảnh thực tế làm cho khách<br>
                                - Lưu trữ chữ ký khách hàng xác nhận<br>
                                - Nghiệp vụ nâng cao:<br>
                                <div class="pl-30">
                                    + Kích hoạt bảo hành thẻ<br>
                                    + Chuyển nhượng thẻ<br>
                                    + Tặng / xóa buổi<br>
                                    + Kết thúc thẻ<br>
                                    + Chuyển cơ sở cho thẻ dịch vụ<br>
                                    + Giao ca nhanh cho cả liệu trình<br>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Quản lý đặt lịch</td>
                            <td>
                                - Quản lý đặt lịch theo ngày / tuần / tháng<br>
                                - Quản lý đặt lịch theo nhân viên<br>
                                - Quản lý đặt lịch theo khách hàng<br>
                                - Quản lý trạng thái đặt lịch: khách đến / khách không đến<br>
                                - Hỗ trợ quản lý đặt lịch tại nhà<br>
                                - Nhận đặt lịch của khách hàng từ web / App: có thể xác nhận và hủy trực tiếp đặt
                                lịch
                                của khách từ phần mềm ( có tin nhắn App miễn phí thông báo cho khách )
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2">Quản lý Ví & Thẻ tiền</td>
                            <td>- Quản lý ví điện tử<br>
                                <div class="pl-30">
                                    + Tổng tiền trong ví<br>
                                    + Lịch sử giao dịch ( Thưởng và chi tiêu )
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                - Quản lý Thẻ tiền<br>
                                <div class="pl-30">
                                    + Danh sách các thẻ tiền<br>
                                    + Chi tiết thẻ tiền: Giá trị thẻ tiền / hạn mức / Áp dụng cho sản phẩm, dịch vụ
                                    /
                                    thời hạn sử dụng / Thẻ tiền kích hoạt hay bị khóa
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Quản lý nhật ký và chăm sóc khách hàng</td>
                            <td>
                                - Cho phép tạo ghi chú phân loại theo dịch vụ hoặc Sales<br>
                                - Cho phép đăng tải video và hình ảnh thực tế của khách hàng<br>
                                - Cho phép chọn các sản phẩm / dịch vụ mà khách đang quan tâm để phục vụ tư vấn và
                                sale<br>
                                - Cho phép đặt các lịch nhắc với nhân viên cho khách hàng (Ví dụ ngày 15/05/2022 gọi
                                lại
                                khách để nhắc khách mua thêm sản phẩm)
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="5">2.1.3</th>
                            <td colspan="2">Thao tác nghiệp vụ kho</td>

                        </tr>
                        <tr>
                            <td>Quản lý tồn kho</td>
                            <td>
                                - Quản lý tồn kho theo từng cơ sở <br>
                                - Quản lý chi tiết giao dịch xuất và nhập trên từng mã sản phẩm<br>
                                - Quản lý tồn thực tế trên hệ thống và tồn thực tế trên kho ( những sản phẩm khách
                                hàng
                                đã thanh toán nhưng chưa giao )<br>
                            </td>
                        </tr>
                        <tr>
                            <td>Quản lý nhập xuất kho</td>
                            <td>
                                - Quản lý đơn nhập / xuất hàng<br>
                                - Cho phép quản lý thanh toán hoặc thu tiền đơn nhập xuất hàng<br>
                                - Hỗ trợ tạo đơn nhập xuất qua file excel
                            </td>
                        </tr>
                        <tr>
                            <td>Quản lý chuyển kho</td>
                            <td>
                                - Chuyển đổi hàng từ cơ sở này sang cơ sở khác<br>
                                - Có hỗ trợ xác nhận cho cơ sở được chuyển đến ( khi nhận đơn sẽ tự động tạo đơn
                                nhập tự
                                động )
                            </td>
                        </tr>
                        <tr>
                            <td>Quản lý chuyển đổi </td>
                            <td>
                                - Chuyển đổi từ sản phẩm sang Nguyên vật liệu<br>
                                - Chuyển đổi từ Nguyên vật liệu sang sản phẩm
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">2.1.4</th>
                            <td colspan="2">Kế toán / HCNS</td>
                        </tr>
                        <tr>
                            <td>Kế toán</td>
                            <td>
                                - Tạo thu / chi khác – thu tại quầy sẽ tự động link vào thu chi chung <br>
                                - Quản lý bảng lương<br>
                                - Tạo thưởng / phạt<br>
                                - Tạo giữ lương / Hoàn lương<br>
                                - Tạo tạm ứng / hoàn ứng
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">2.1.5</th>
                            <td colspan="2">Đánh giá tại quầy</td>
                        </tr>
                        <tr>
                            <td>Mỗi điểm sử dụng 1 máy tính bảng tại quầy giúp khách hàng ký xác nhận sử dụng dịch
                                vụ và
                                đánh giá chất lượng dịch vụ</td>
                            <td>
                                - Không cần kết nối dây, chỉ cần kết nối mạng<br>
                                - Liên kết trực tiếp vào hệ thống phần mềm & Báo cáo
                            </td>
                        </tr>
                        <tr class="text-danger">
                            <th scope="row" rowspan="2">2.1.6</th>
                            <td colspan="2">Chăm sóc khách hàng</td>
                        </tr>
                        <tr class="text-danger">
                            <td>
                                - Phân bổ khách hàng cho các nhân viên CSKH<br>
                                - Chăm sóc khách hàng theo quy trình:<br>
                                Tiếp cận, đặt lịch, trải nghiệm, mua gói, chăm sóc buổi đầu, 50% dịch vụ, 80% dịch
                                vụ,
                                Upsale
                            </td>
                            <td>
                                - Tích hợp hệ thống tổng đài cho phép 10 nhân viên gọi từ 1 đầu số di động tới khách
                                hàng trực tiếp từ phần mềm<br>
                                - Hỗ trợ ghi âm cuộc gọi<br>
                                - Khách hàng khi gọi vào tổng đài sẽ chuyển cuộc gọi cho các nhân viên tư vấn
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="function-website">
                <h3 title="function-website">III. WEB </h3>
                <table class="table table-bordered table-detail">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">MÔ TẢ</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3" class="text-center" class="a">3.1 WEBSITE </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="4">3.1.1</th>
                            <td colspan="2">Kết nối </td>
                        </tr>
                        <tr>
                            <td>
                                Phần mềm
                            </td>
                            <td>
                                - Hiển thị thông tin <br>
                                <div class="pl-30">
                                    + Danh sách sản phẩm / dịch vụ<br>
                                    + Bảng giá và các chương trình ưu đãi<br>
                                </div>
                                - Đặt lịch, đơn hàng online: sẽ được kết nối vào phần mềm theo điểm để được nhân
                                viên xử
                                lý
                            </td>
                        </tr>
                        <tr>
                            <td>Fanpage, Zalo </td>
                            <td>
                                - Live chat trực tiếp qua Fanpage hoặc Zalo
                            </td>
                        </tr>
                        <tr>
                            <td>Analytics Google</td>
                            <td>
                                - Thống kê chi tiết các lượt truy cập và xu hướng truy cập
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">3.1.2</th>
                            <td colspan="2">Thông tin giới thiệu</td>
                        </tr>
                        <tr>
                            <td>Trang chủ <br>
                                Trang giới thiệu<br>
                                Trang tin tức / Blogs<br>
                                Trang sản phẩm<br>
                                Trang gói dịch vụ<br>
                                Trang đặt lịch<br>
                                Trang đặt hàng trực tuyến<br>
                                Trang chính sách bán hàng<br>
                                Trang liên hệ</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">3.1.3</th>
                            <td colspan="2">Đăng nhập thành viên</td>

                        </tr>
                        <tr>
                            <td>
                                Đăng ký thành viên <br>
                                Đăng nhập<br>
                                Quên mật khẩu
                            </td>
                            <td>
                                - Hỗ trợ quên mật khẩu qua mã OTP ( Miễn phí theo chính sách của Google Firebase )
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">3.1.4</th>
                            <td colspan="2">Quản lý sau đăng nhập</td>
                        </tr>
                        <tr>
                            <td>
                                Quản lý thông tin cá nhân <br>
                                Quản lý đặt lịch<br>
                                Quản lý đơn hàng<br>
                                Quản lý ví và thẻ tiền<br>
                                Quản lý mã giảm giá<br>
                                Quản lý thẻ dịch vụ
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">3.1.5</th>
                            <td colspan="2">Hỗ trợ Notification Browsers</td>
                        </tr>
                        <tr>
                            <td>Gửi tin nhắn đến khách hàng</td>
                            <td>
                                Cho phép gửi ngay cả khi khách hàng đang không truy cập website của SPA / Thẩm mỹ
                                viện
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="function-app">
                <h3 title="function-app">IV. APP</h3>
                <table class="table table-bordered table-detail">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">MÔ TẢ</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3" class="text-center" class="a">4.1 KHÁCH HÀNG ĐĂNG NHẬP </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="4">4.1.1</th>
                            <td colspan="2">Đăng ký – Đăng nhập</td>
                        </tr>
                        <tr>
                            <td>
                                Đăng ký tài khoản
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>Đăng nhập tài khoản</td>
                            <td>
                                - Đăng nhập qua tài khoản và mật khẩu <br>
                                - Đăng nhập qua việc quét mã QR code tại quầy
                            </td>
                        </tr>
                        <tr>
                            <td>Quên mật khẩu</td>
                            <td>
                                - Hỗ trợ quên mật khẩu qua Email và Mã OTP điện thoại
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">4.1.2</th>
                            <td colspan="2">Cập nhật thông tin về Spa qua App</td>
                        </tr>
                        <tr>
                            <td>Trang chủ App</td>
                            <td>
                                - Banner các chương trình khuyến mại <br>
                                - Quick link truy cập nhanh:<br>
                                <div class="pl-30">
                                    + Sản phẩm / dịch vụ<br>
                                    + Ưu đãi<br>
                                    + Ví và thẻ tiền<br>
                                    + Voucher / coupon<br>
                                    + Thẻ dịch vụ<br>
                                </div>
                                - Khối dịch vụ Hot<br>
                                - Khối sản phẩm ưu đãi<br>
                                - Khối tin tức / blog<br>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">4.1.3</th>
                            <td colspan="2">Quản lý thông tin tài khoản</td>

                        </tr>
                        <tr>
                            <td>
                                Quản lý Thông tin cá nhân <br>
                                Quản lý ví và thẻ tiền<br>
                                Quản lý nhật ký<br>
                                Quản lý đơn hàng & lịch sử thanh toán<br>
                                Quản lý mã giảm giá<br>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4.1.4</th>
                            <td colspan="2">Đánh giá dịch vụ</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">4.1.5</th>
                            <td colspan="2">Đặt lịch trực tuyến</td>
                        </tr>
                        <tr>
                            <td>Đặt lịch trực tuyến <br>
                                Quản lý đặt lịch ( Chỉnh sửa và hủy )</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">4.1.6</th>
                            <td colspan="2">Đặt hàng ( mua sản phẩm / thẻ dịch vụ )</td>
                        </tr>
                        <tr>
                            <td>Xem thông tin sản phẩm & Dịch vụ <br>
                                Chọn và đặt hàng trực tuyến qua App</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">4.1.7</th>
                            <td colspan="2">Nhận thông báo </td>
                        </tr>
                        <tr>
                            <td>Tin nhắn APP ( Notification )</td>
                            <td>
                                Tin nhắn về chương trình ưu đãi <br>
                                Tin nhắn lên cấp<br>
                                Tin nhắn chúc mừng sinh nhật<br>
                                Tin nhắn nhắc lịch<br>
                                Tin nhắn thông báo thanh toán<br>
                            </td>
                        </tr>
                        <tr class="text-danger">
                            <th scope="row" rowspan="2">4.1.8</th>
                            <td colspan="2">Nhận smart call</td>
                        </tr>
                        <tr class="text-danger">
                            <td>Cuộc gọi tự động giới thiệu về các chương trình ưu đãi</td>
                            <td>
                                Cho phép đo lường thời gian nghe của khách hàng để đổi sale tiếp cận Marketing
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center" class="a">4.2 NHÂN VIÊN ĐĂNG NHẬP</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">4.2.1</th>
                        </tr>
                        <tr>
                            <td>Quản lý thông tin cá nhân</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">4.2.2</th>
                            <td colspan="2">Quản lý dịch vụ</td>
                        </tr>
                        <tr>
                            <td>Nếu tài khoản của bạn là kỹ thuật viên</td>
                            <td>
                                Danh sách các dịch vụ đã làm cho khách <br>
                                Có thể lọc theo ngày / tháng <br>
                                Nhập ghi chú khách hàng trên mỗi ca dịch vụ<br>
                                Chụp ảnh thực tế khách hàng thông qua APP<br>
                                Tự hoàn thành ca khi thực hiện xong<br>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="2">4.2.3</th>
                            <td colspan="2">Thống kê</td>
                        </tr>
                        <tr>
                            <td>Hoa hồng bán hàng <br>
                                Lương ca dịch vụ</td>
                            <td>
                                Tự quản lý theo ngày <br>
                                Đảm bảo lương dịch vụ và thưởng hoa hồng không bị nhập thiếu<br> Thống kê tổng doanh số và dự kiến thưởng hoa hồng KPI
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="function-report">
                <h3 title="function-report">V. BÁO CÁO</h3>
                <table class="table table-bordered table-detail">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">MÔ TẢ</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3" class="text-center" class="a">5.1 BÁO CÁO PHẦN MỀM </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="1">5.1.1</th>
                            <td colspan="1">Báo cáo tổng quan ngày</td>
                            <td>Báo cáo theo toàn bộ hoặc từng chi nhánh<br />Khách hàng mới ( Đến cơ sở / Đến từ online web / app )<br>Doanh số bán hàng / Thanh toán đơn mới / Thanh toán nợ<br> Thống kê lượt đặt lịch, làm dịch vụ <br />Tổng thu / chi trong ngày</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="1">5.1.2</th>
                            <td colspan="1">Báo cáo Khách hàng</td>
                            <td>
                                Thống kê khách hàng mới theo thời gian<br>
                                Thống kê theo toàn bộ hoặc từng chi nhánh <br> Thống kê theo nhóm ( cấp bậc ) khách hàng<br> Thống kê theo nhân viên chăm sóc <br>
                                Thống kê theo nguồn khách hàng<br>
                                Thống kê theo khu vực (thành phố / quận huyện)<br><br> Biểu đồ thống kê theo 12 tháng năm kết hợp so sánh với 12 tháng năm trước

                            </td>
                        </tr>

                        <tr>
                            <th scope="row" rowspan="1">5.1.3</th>
                            <td colspan="1">Báo cáo dịch vụ</td>
                            <td>
                                Thống kê dịch vụ theo toàn bộ hoặc từng chi nhánh <br>
                                Thống kê dịch vụ theo thời gian<br>
                                Thống kê dịch vụ theo nhân viên<br>
                                Thống kê dịch vụ thường / bảo hành<br><br>Cảnh báo buổi đầu tiên của khách hàng <br> Cảnh báo buổi đầu tiên của thẻ <br> Cảnh báo buổi cuối của khách hàng
                            </td>
                        </tr>

                        <tr>
                            <th scope="row" rowspan="1">5.1.4</th>
                            <td colspan="1">Báo cáo bán hàng</td>
                            <td>
                                Báo cáo doanh số <br>
                                Báo cáo danh sách sản phẩm / dịch vụ bán ra <br>
                                Báo cáo trả hàng <br>
                                Báo cáo thanh toán nợ <br>
                                Báo cáo Top bán hàng, Doanh số
                            </td>
                        </tr>

                        <tr>
                            <th scope="row" rowspan="1">5.1.5</th>
                            <td colspan="1">Thu chi & Sổ quỹ</td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="1">5.1.6</th>
                            <td colspan="1">Báo cáo công nợ</td>
                            <td>
                                Báo cáo công nợ <br>
                                Báo cáo khóa nợ <br>
                                Báo cáo đơn tặng <br>
                            </td>
                        </tr>


                        <tr>
                            <th scope="row" rowspan="1">5.1.7</th>
                            <td colspan="1">Báo cáo Nhân viên</td>
                            <td>
                                Báo cáo Nhân viênv<br>
                                Báo cáo Lương ca<br>
                                Báo cáo Hoa hồng tư vấn<br>
                                Báo cáo doanh số<br>
                                Báo cáo bảng lương
                            </td>
                        </tr>


                        <tr>
                            <th scope="row" rowspan="1">5.1.8</th>
                            <td colspan="1">Báo cáo tồn kho</td>
                            <td>

                                Báo cáo tồn<br>
                                Báo cáo tiêu hao<br>
                                Báo cáo nguyên liệu dự kiến<br>
                            </td>
                        </tr>




                        <tr>
                            <td colspan="3" class="text-center" class="a">5.2 BÁO CÁO WEB/APP </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="1">5.1.1</th>
                            <td colspan="1">Tích hợp công cụ thống kê số 1 thế giới từ Google</td>
                            <td>Website: Google Analytics<br> App: Google Firebase</td>
                        </tr>


                    </tbody>
                </table>
            </div>
            <div id="function-devices">
                <h3 title="function-devices">VI. THIẾT BỊ</h3>
                <table class="table table-bordered table-detail">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Thiết bị</th>
                            <th scope="col">MÔ TẢ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3" class="text-center" class="a">6.1 THIẾT BỊ HỖ TRỢ </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="1">6.1.1</th>
                            <td colspan="1">Máy in hóa đơn</td>
                            <td>Các máy khổ A4, A5, K80, K57</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="1">6.1.2</th>
                            <td colspan="1">Camera nhận diện khuôn mặt</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="1">6.1.3</th>
                            <td colspan="1">Webcam</td>
                            <td>
                                Chụp ảnh khách hàng tại quầy
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="1">6.1.4</th>
                            <td colspan="1">Máy đọc mã vạch</td>
                            <td>
                                Giúp quản lỷ sản phẩm & bán hàng nhanh
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="1">6.1.5</th>
                            <td colspan="1">Máy đọc thẻ từ</td>
                            <td>
                                Thẻ khách hàng thân thiết ( thẻ vip )
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="1">6.1.6</th>
                            <td colspan="1">Máy tính bảng & Bút ký điện tử</td>
                            <td>
                                Hỗ trợ ký điện tử và đánh giá dịch vụ tại quầy
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="1">6.1.7</th>
                            <td colspan="1">Điện thoại chạy hệ điều hành Android</td>
                            <td>
                                Xác nhận thanh toán và tạo thanh toán tự động khi khách hàng chuyển khoản cá nhân
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/function-detail.js"></script>
<?php
get_footer();
