                    <div class="row">
                        <div class="col-md-6">
                            <div id="box_left_chuyende" class="box_chuyende box_left_chuyende">
                                <div class="title">
                                    Chọn các chuyên đề cho đề thi
                                </div>
                                
                                <div class="accordion chondethi" id="accordionExample">
                                    <?php
                                    $dataS = json_decode('{"data": [{"chuyende": "HS", "tenchuyende": "HÀM SỐ", "chuong": "TÍNH ĐƠN ĐIỆU ", "code": 1}, {"chuyende": "HS", "tenchuyende": "HÀM SỐ", "chuong": "CỰC TRỊ", "code": 2}, {"chuyende": "HS", "tenchuyende": "HÀM SỐ", "chuong": "GIÁ TRỊ LỚN NHẤT & GIÁ TRỊ NHỎ NHẤT", "code": 3}, {"chuyende": "HS", "tenchuyende": "HÀM SỐ", "chuong": "TIỆM CẬN", "code": 4}, {"chuyende": "HS", "tenchuyende": "HÀM SỐ", "chuong": "TƯƠNG GIAO", "code": 5}, {"chuyende": "HS", "tenchuyende": "HÀM SỐ", "chuong": "TIẾP TUYẾN", "code": 6}, {"chuyende": "HS", "tenchuyende": "HÀM SỐ", "chuong": "BÀI TẬP TỔNG HỢP TRONG ĐỀ THI ĐẠI HỌC", "code": 3}, {"chuyende": "LOGA", "tenchuyende": "MŨ LOGARIT", "chuong": "LŨY THỪA", "code": 1}, {"chuyende": "LOGA", "tenchuyende": "MŨ LOGARIT", "chuong": "PT MŨ ", "code": 2}, {"chuyende": "LOGA", "tenchuyende": "MŨ LOGARIT", "chuong": "PT LOGA", "code": 3}, {"chuyende": "LOGA", "tenchuyende": "MŨ LOGARIT", "chuong": "BPT MŨ-LOGA", "code": 4}, {"chuyende": "LOGA", "tenchuyende": "MŨ LOGARIT", "chuong": "BÀI TẬP TỔNG HỢP TRONG ĐỀ THI ĐẠI HỌC", "code": 5}, {"chuyende": "NH", "tenchuyende": "NGUYÊN HÀM", "chuong": "BÀI TẬP NGUYÊN HÀM CƠ BẢN", "code": 1}, {"chuyende": "NH", "tenchuyende": "NGUYÊN HÀM", "chuong": "BÀI TẬP NGUYÊN HÀM TRONG ĐỀ THI ĐẠI HỌC ", "code": 2}, {"chuyende": "TP", "tenchuyende": "TÍCH PHÂN", "chuong": "TÍNH TÍCH PHÂN ", "code": 1}, {"chuyende": "TP", "tenchuyende": "TÍCH PHÂN", "chuong": "ỨNG DỤNG TICH PHÂN TRONG TÍNH DIỆN TÍCH ", "code": 2}, {"chuyende": "TP", "tenchuyende": "TÍCH PHÂN", "chuong": "ỨNG DỤNG TÍCH PHÂN TRONG TÍNH THỂ TÍCH ", "code": 3}, {"chuyende": "TP", "tenchuyende": "TÍCH PHÂN", "chuong": "BÀI TẬP TỔNG HỢP TÍCH PHÂN TRONG ĐỀ THI ĐẠI HỌC", "code": 4}, {"chuyende": "SP", "tenchuyende": "SỐ PHỨC", "chuong": "BIẾN ĐỔI SỐ PHỨC ", "code": 1}, {"chuyende": "SP", "tenchuyende": "SỐ PHỨC", "chuong": "PHƯƠNG TRÌNH BẬC 2 SỐ PHỨC ", "code": 2}, {"chuyende": "SP", "tenchuyende": "SỐ PHỨC", "chuong": "BÀI TẬP SỐ PHỨC TRONG ĐỀ THI ĐẠI HỌC ", "code": 3}, {"chuyende": "HHKG", "tenchuyende": "HÌNH HỌC KHÔNG GIAN", "chuong": "THỂ TÍCH HÌNH CHÓP", "code": 1}, {"chuyende": "HHKG", "tenchuyende": "HÌNH HỌC KHÔNG GIAN", "chuong": "THẺ TÍCH HÌNH LĂNG TRỤ", "code": 2}, {"chuyende": "HHKG", "tenchuyende": "HÌNH HỌC KHÔNG GIAN", "chuong": "BÀI TẬP TỔNG HỢP THỂ TÍCH ĐA DIỆN", "code": 3}, {"chuyende": "HHKG", "tenchuyende": "HÌNH HỌC KHÔNG GIAN", "chuong": "THỂ TÍCH KHỐI TRÒN XOAY-NÓN TRỤ- CẦU", "code": 4}, {"chuyende": "OXYZ", "tenchuyende": "OXYZ", "chuong": "HỆ TỌA ĐỘ OXYZ", "code": 1}, {"chuyende": "OXYZ", "tenchuyende": "OXYZ", "chuong": "PHƯƠNG TRÌNH MẶT PHẲNG", "code": 2}, {"chuyende": "OXYZ", "tenchuyende": "OXYZ", "chuong": "PHƯƠNG TRÌNH ĐƯỜNG THẲNG", "code": 3}, {"chuyende": "OXYZ", "tenchuyende": "OXYZ", "chuong": "PHƯƠNG TRÌNH MẶT CẦU", "code": 4}, {"chuyende": "OXYZ", "tenchuyende": "OXYZ", "chuong": "BÀI TẬP TỔNG HỢP OXYZ TRONG ĐỀ THI ĐẠI HỌC", "code": 5}]}');
                                    $i = 100;
                                    foreach ($dataS as $k => $v) {
                                    $i++;
                                    ?>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button  onclick="getBoxCD(<?php echo $i; ?>);" class="btn btn-link btn-block text-left collapsed" type="button"
                                                         data-toggle="collapse" data-target="#collapse<?php echo $i ?>"
                                                         aria-expanded="false"
                                                         aria-controls="collapse<?php echo $i ?>">
                                                    <?php echo $k ?>
                                                </button>
                                            </h2>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="box_right_chuyende" class="box_chuyende box_right_chuyende">
                                <div class="title">
                                    Chọn mức độ khó trong đề
                                </div>
                                <div class="row">
                                    <div class="col-md-3"><p class="dokho">Tên Chương </p></div>
                                    <div class="col-md-3"></div>
                                    <div class="col"><p class="dokho">GIỎI</p></div>
                                    <div class="col"><p class="dokho">KHÁ</p></div>
                                    <div class="col"><p class="dokho">TB</p></div>
                                </div>

                                <?php
                                $i = 100;
                                foreach ($dataS as $k => $v) {
                                $i++;
                                ?>
                                <div class="chuyende" id="boxcd<?php echo $i; ?>">
                                    <?php foreach ($v as $m => $s) { ?>

                                    <div id="<?php echo $s->chuyende . $s->code ?>" class="row row-input">
                                        <div class="col-md-6 ">
                                            <label><?php echo $s->chuong ?></label>
                                        </div>
                                        <div class="col-md-2"><input onclick="this.select()" onchange="AddInputs()"
                                                                     name="param[<?php echo $s->chuyende . '-' . $s->code . '-GIOI' ?>]"
                                                                     class="form-control sum" type="number"
                                                                     min="0"
                                                                     max="1000" value="0"
                                                                     placeholder="Nhập số lượng câu hỏi"/>
                                        </div>
                                        <div class="col-md-2"><input onclick="this.select()" onchange="AddInputs()"
                                                                     name="param[<?php echo $s->chuyende . '-' . $s->code . '-KHA' ?>]"
                                                                     class="form-control sum" type="number"
                                                                     min="0"
                                                                     max="1000" value="0"
                                                                     placeholder="Nhập số lượng câu hỏi"/>
                                        </div>
                                        <div class="col-md-2"><input onclick="this.select()" onchange="AddInputs()"
                                                                     name="param[<?php echo $s->chuyende . '-' . $s->code . '-TB' ?>]"
                                                                     class="form-control sum" type="number"
                                                                     min="0"
                                                                     max="1000" value="0"
                                                                     placeholder="Nhập số lượng câu hỏi"/>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <?php } ?>