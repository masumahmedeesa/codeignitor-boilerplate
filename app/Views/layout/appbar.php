<div class="body-left col-md-3">
    <div class="accordion pt-5" id="sidebarAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingCoreUser">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCoreUser" aria-expanded="true" aria-controls="collapseCoreUser">
                    <i class="bi bi-caret-right-fill me-2"></i> কোর ইউজার
                </button>
            </h2>
            <div id="collapseCoreUser" class="accordion-collapse collapse show" aria-labelledby="headingCoreUser" data-bs-parent="#sidebarAccordion">
                <div class="accordion-body p-0">
                    <ul class="nav-box list-unstyled mb-0">
                        <?php
                        $navItems = [
                            ["name" => "Transfer Application List", "link" => "/ejoining/transferapplication"],
                            ["name" => "Create Transfer Application", "link" => "/ejoining/transferapplication/new"]
                        ];
                        foreach ($navItems as $item): ?>
                            <li class="nav-item">
                                <a href="<?= $item['link'] ?>" class="nav-link d-flex align-items-center">
                                    <i class="bi bi-arrow-right me-2"></i>
                                    <?= $item['name'] ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- $navItems = [
                            'আগত নোটিং',
                            'প্রেরিত নোটিং',
                            'অনুমোদিত নোটিং',
                            'অপেক্ষমান নোটিং',
                            'অপেক্ষমান এসএপি এন্ট্রি',
                            'অনুমোদিত এবং এন্ট্রিকৃত তালিকা'
                        ]; -->