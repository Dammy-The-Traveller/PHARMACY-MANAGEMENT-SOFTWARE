<div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg toggle-screen-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                        <div class="card-inner-group" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                          <div class="card-inner">
                            <h3 class="nk-block-title page-title">Settings</h3>
                            <div class="nk-block-des text-soft">
                              <p>Here you can change and edit your needs</p>
                            </div>
                          </div>
                          <div class="card-inner p-0">
                            <ul class="link-list-menu">
                               <?php if ($logged_user_type == 'admin'): ?>
                              <li><a class="<?= urlIs('/PMS/settings') ? 'active' : '' ?>" href="/PMS/settings"><em class="icon ni ni-setting-alt-fill"></em><span>General</span></a></li>
                              <li><a class="<?= urlIs('/PMS/Members-settings') ? 'active' : '' ?>" href="/PMS/Members-settings"><em class="icon ni ni-account-setting"></em><span>Members</span></a></li>
                              <li><a class="<?= urlIs('/PMS/email-settings') ? 'active' : '' ?>" href="/PMS/email-settings"><em class="icon ni ni-lock-alt-fill"></em><span>E-mail</span></a></li>
                              <li><a class="<?= urlIs('/PMS/security-settings') ? 'active' : '' ?>" href="/PMS/security-settings"><em class="icon ni ni-shield-star-fill"></em><span>Security</span></a></li>
                               <?php endif; ?>
                              <li><a class="<?= urlIs('/PMS/account-log') ? 'active' : '' ?>" href="/PMS/account-log"><em class="icon ni ni-activity-round-fill"></em><span>Account activity</span></a></li>
                            </ul>
                          </div>
                        </div></div></div></div><div class="simplebar-placeholder" style="width: 299px; height: 422px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
                      </div>