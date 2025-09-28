<div class="note-container">
    <div class="note-main-body mt-2">
        <div class="note-content bg-white px-5 py-3 border border-dark-subtle">
            <div class="name-section d-flex flex-column">
                <span class="d-flex justify-content-end">
                    <h6 class="fw-bolder">হিউম্যান রিসোর্সেস ডিপার্টমেন্ট-১</h6>
                </span>
                <span class="wing-name text-decoration-underline d-flex justify-content-end">(প্ল্যানিং, প্রমোশন এন্ড ট্রান্সফার উইং)</span>
            </div><br>
            <div class="title-section d-flex justify-content-center">
                <h6 class="text-decoration-underline fw-bolder"> $transferSubject</h6>
            </div>
            <div class="description-section">
                <p>১. দাপ্তরিক কাজের সুবিধার্থে নিম্নবর্ণিত কর্মকর্তাগণকে তাঁদের নামের পাশে বর্ণিত অফিস/বিভাগে বহাল করা যেতে পারে:</p>
            </div>
            <div class="seniority-name-section d-flex justify-content-end">
                <span class="text-decoration-underline">(জ্যেষ্ঠতার ক্রমানুসারে নয়)</span>
            </div>
            <div class="table-section">
                <table class="table table-bordered border-dark-subtle table-section-style" id="noteDataTable">
                    <thead>
                        <tr class="">
                            <th class="py-0 my-0 align-content-around text-center">ক্রম</th>
                            <th class="py-0 my-0 align-content-around text-center">নাম ও আইডি নম্বর</th>
                            <th class="py-0 my-0 align-content-around text-center">পদবী</th>
                            <th class="py-0 my-0 align-content-around text-center">যে অফিস/বিভাগে কর্মরত</th>
                            <th class="py-0 my-0 align-content-around text-center">যে অফিস/বিভাগে বদলি/বহাল <p class="mb-0">করা যায়</p>
                            </th>
                            <th class="py-0 my-0 align-content-around text-center">মন্তব্য</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //$session = \Config\Services::session();
                        //$tableData = $session->get('tableData');
                        //foreach ($transferTableData as $index => $row): 
                        ?>
                        <tr>
                            <td class="py-0">$index + 1 ?></td>
                            <td class="py-0">জনাব <Span>esc($row['name_bn']) ?></Span> (<Span> esc($row['sapID']) ?></Span>)</td>
                            <td class="py-0"> esc($row['designation_bn']) ?></td>
                            <td class="py-0"> esc($row['dept_bn']) ?></td>
                            <td class="py-0" data-name=" esc($row['transfer_office_bn']) ?>"> esc($row['transfer_office_bn'] == "প্রধান কার্যালয়" ? $row['transfer_dept_bn'] : $row['transfer_office_bn']) ?></td>
                            <td class="py-0">৫ বছর ৩ মাস ২ দিন</td>
                        </tr>
                        <?php //endforeach; 
                        ?>
                    </tbody>
                </table>
            </div>
            <br>
            <div class="application-section">
                <p>2. সদয় অনুমোদনের জন্য উপস্থাপন করা হলো।</p>
            </div>
            <div class="note-creator d-flex justify-content-end">
                <div class="d-flex flex-column align-items-center me-5">
                    <span class="">( $name_bn ?>)</span>
                    <span class=""> $designation ?></span>
                    <span class="">ফোন: ২১৫৫৪</span>
                </div>
            </div>
        </div>
        <div class="approver-selection mt-3 bg-white border border-dark-subtle px-5 py-3 d-flex align-items-end">
            <div class="approver-list w-50">
                <label for="approverDropdown">কর্মকর্তা নির্বাচনপূর্বক অগ্রায়ন করুন:</label>
                <select class="form-select form-style border border-black selection-item-height" id="approverDropdown">
                </select>
            </div>
            <button class="btn text-white text-center ms-2 add-btn selection-item-height" id="submitBtn">অগ্রায়ন করুন</button>
        </div>
    </div>
</div>