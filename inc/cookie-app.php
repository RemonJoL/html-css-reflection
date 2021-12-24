<div class="cookie-app">
  <!-- Cookie Popup -->
  <div class="cookie-message-container">
    <div class="cookie-header">
      <h3>Cookies Policy</h3>
    </div>
    <div class="cookie-content">
      <p class="p1">
        We use cookies to obtain aggregate data regarding site traffic and interaction,
        in order to identify user trends and obtain insights in order to continually improve our site.
        These cookies enable us to improve your customer experience as you use our site and help provide you with relevant online marketing.
      </p>
      <p class="p2">
        You can see a list of the other companies who use cookies on this website,
        by visiting cookie settings at the bottom of each page.
        For full details of how we use your personal information,
        and your rights in relation to it,
        view our privacy policy.
      </p>
    </div>
    <div class="cookie-btn-container">
      <div class="cookie-btn-divider">
        <a id="cookieSettingsBtn" class="btn-contact cookie-btn" href="#">change settings</a>
      </div>
      <div class="cookie-btn-divider">
        <a id="cookieAcceptBtn" class="webdesign cookie-btn" href="#">accept cookies</a>
      </div>
    </div>
  </div>
  <!-- /Cookie Popup -->

  <!-- Cookie Settings -->
  <div class="cookie-settings">
    <div class="container">
      <div class="h3">Cookies Preferences</div>

      <div class="h5">
        Netmatters uses cookies on their website.
        Cookies are small text files that are stored on your computer or other device by websites that you visit.
        This page explains the cookies we use and what we use them for, and lets you turn them on or off.
        (Some cookies are necessary in order for our website to work properly.)
        We also explain below which other companies use cookies on our website and what they use them for,
        and lets you turn those other companies' cookies on or off.
      </div>

      <div class="h5">
        Our website uses cookies in order to make the website easier to use, to support the provision of information and functionality to you,
        as well as to provide us with information about how the website is used so that we can make sure it is as up to date,
        relevant and error free as we can. We also use cookies to try to ensure that our online adverts reflect the interests of web users.
        Further information about the types of cookies that are used on our website is set out box below.
      </div>

      <div class="h5">
        As well as the options provided below, you can choose to restrict or block cookies through your browser settings at any time.
        For more information about how to do this, and about cookies in general, you can visit
      <a href="https://www.allaboutcookies.org">www.allaboutcookies.org</a>
       and
      <a href="https://www.youronlinechoices.eu">www.youronlinechoices.eu</a>
      . However, please be aware that restricting or blocking cookies set on our website may impact the functionality or performance of the website,
      or prevent you from using certain services provided through the website
      </div>

      <div class="h5">
        Please note that third parties (including, for example, advertising networks and providers of external services like website analysis services)
        may also use cookies, over which we have no control, although we may receive services from these third parties (including, for example,
        for targeted advertising purposes and website analytics). These cookies are likely to be performance cookies or targeting cookies
        (as described below).
      </div>
    </div>

    <div class="container">
      <div class="h1">Functional Cookies</div>

      <div class="h5">
        Functional cookies allow our website to remember choices you make, such as your user name, log in details or language preferences,
        and any customisations you make to pages on our website during your visit.
      </div>

      <div class="h4">
        <strong>Examples of how we use these cookies include:</strong>
      </div>
      <ul>
        <li>
          <h5>Live chat</h5>
        </li>
      </ul>
      <div class="cookie-choice-container">
        <button type="button" onclick="cookieToggleOn(0)" class="btn webdesign cookie-disable">
          disable
        </button>
        <button type="button" onclick="cookieToggleOff(0)" class="btn cookie-btn-disabled cookie-enable">
          enable
        </button>
      </div>
    </div>

    <div class="container">
      <div class="h1">Performance & Analytics</div>

      <div class="h5">
        These cookies help us understand how people use our website.
        They collect information such as which pages on our website visitors go to most often, which features they use,
        and which websites people have visited before they visit ours.
        We use this information to improve our website and provide a better user experience.
      </div>

      <div class="h4">
        <strong>Examples of how we use these cookies include:</strong>
      </div>
      <ul>
        <li>
          Monitoring and providing statistics on how our website is used.
        </li>
        <li>
          Helping us improve our website by measuring any errors that occur.
        </li>
        <li>
          Testing the website's design and operability.
        </li>
      </ul>
      <div class="cookie-choice-container">
        <div onclick="cookieToggleOn(1)" class="btn webdesign cookie-disable">
          disable
        </div>
        <div onclick="cookieToggleOff(1)" class="btn cookie-btn-disabled cookie-enable">
          enable
        </div>
      </div>
    </div>

    <div class="container">
      <div class="h5">
        Different web browsers may use different methods for managing cookies. Please follow the instructions below,
        from the web browser manufacturers directly, to configure your browser settings*.
      </div>

      <ul>
        <li>
          <a href="https://support.microsoft.com/en-us/help/17442/windows-internet-explorer-delete-manage-cookies">Microsoft Internet Explorer (IE)</a>
        </li>
        <li>
          <a href="https://support.google.com/chrome/answer/95647?hl=en">Google Chrome</a>
        </li>
        <li>
          <a href="https://support.apple.com/en-gb/guide/safari/manage-cookies-and-website-data-sfri11471/mac">Safari</a>
        </li>
        <li>
          <a href="https://support.mozilla.org/en-US/kb/enable-and-disable-cookies-website-preferences">Firefox</a>
        </li>
      </ul>
    </div>

    <div class="container">

      <div id="cookie-table-toggle" class="btn cookie-details-btn">Show detailed preferences</div>

      <div class="cookie-details-table-outer">
        <table class="cookie-table" style="display: none;">
          <thead>
            <tr>
              <td colspan="1"><span>Company</span></td>
              <td colspan="1"><span>Domain</span></td>
              <td></td>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td colspan="1">
                <span class="company-details" onclick="cookieDetails(0)">
                  <span class="expand-collapse">+</span>
                  <span>Lead Forensics</span>
                </span>
              </td>
              <td colspan="1">https://www.leadforensics.com/</td>
              <td>
                <div class="cookie-choice-table">
                  <div onclick="cookieToggleOn(2)" class="btn webdesign cookie-disable">
                    disable
                  </div>
                  <div onclick="cookieToggleOff(2)" class="btn cookie-btn-disabled cookie-enable">
                    enable
                  </div>
                </div>
              </td>
            </tr>
            <tr class="cookie-details-table-hidden" style="display: none;">
              <td colspan="3">
                <div>
                  <div>
                    Netmatters use a paid for software on our website which allows us access to information on the company you work for.
                    This is done through the business' registered IP address and only allows us access to the information such as contact details,
                    year founded, SIC codes and other information about the business. It also records the behaviour of the user from the company on the website,
                    such as page views, time on the site, "goals" completed and other similar metrics.
                    We use this data to help us improve lead generation through the website as this tool allows us access to see which businesses
                    have visited the website but have not converted by calling, emailing or sending a contact form.
                  </div>
                  <div>
                    <div class="btn cookie-btn-hidden"><a href="#" target="_blank">terms & conditions</a></div>
                    <div class="btn cookie-btn-hidden"><a href="#" target="_blank">privacy policy</a></div>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>

          <tbody>
            <tr>
              <td colspan="1">
                <span class="company-details" onclick="cookieDetails(1)">
                  <span class="expand-collapse">+</span>
                  <span>Hotjar Ltd</span>
                </span>
              </td>
              <td colspan="1">hotjar.com</td>
              <td>
                <div class="cookie-choice-table">
                  <div onclick="cookieToggleOn(3)" class="btn webdesign cookie-disable">
                    disable
                  </div>
                  <div onclick="cookieToggleOff(3)" class="btn cookie-btn-disabled cookie-enable">
                    enable
                  </div>
                </div>
              </td>
            </tr>
            <tr class="cookie-details-table-hidden" style="display: none;">
              <td colspan="3">
                <div>
                  <div class="btn cookie-btn-hidden"><a href="#" target="_blank">terms & conditions</a></div>
                  <div class="btn cookie-btn-hidden"><a href="#" target="_blank">privacy policy</a></div>
                </div>
              </td>
            </tr>
          </tbody>

          <tbody>
            <tr>
              <td colspan="1">
                <span class="company-details" onclick="cookieDetails(2)">
                  <span class="expand-collapse">+</span>
                  <span>Linkedin Corporation</span>
                </span>
              </td>
              <td colspan="1">licdn.com</td>
              <td>
                <div class="cookie-choice-table">
                  <div onclick="cookieToggleOn(4)" class="btn webdesign cookie-disable">
                    disable
                  </div>
                  <div onclick="cookieToggleOff(4)" class="btn cookie-btn-disabled cookie-enable">
                    enable
                  </div>
                </div>
              </td>
            </tr>
            <tr class="cookie-details-table-hidden" style="display: none;">
              <td colspan="3">
                <div>
                  <div class="btn cookie-btn-hidden"><a href="#" target="_blank">terms & conditions</a></div>
                  <div class="btn cookie-btn-hidden"><a href="#" target="_blank">privacy policy</a></div>
                </div>
              </td>
          </tbody>

          <tbody>
            <tr>
              <td colspan="1">
                <span class="company-details" onclick="cookieDetails(3)">
                  <span class="expand-collapse">+</span>
                  <span>Facebook Inc.</span>
                </span>
              </td>
              <td colspan="1">facebook.com, facebook.net</td>
              <td>
                <div class="cookie-choice-table">
                  <div onclick="cookieToggleOn(5)" class="btn webdesign cookie-disable">
                    disable
                  </div>
                  <div onclick="cookieToggleOff(5)" class="btn cookie-btn-disabled cookie-enable">
                    enable
                  </div>
                </div>
              </td>
            </tr>
            <tr class="cookie-details-table-hidden" style="display: none;">
              <td colspan="3">
                  <div>
                    Facebook is an online social networking service that enables its users to connect with friends and family as well as make new connections.
                  </div>
                  <div>
                    <div class="btn cookie-btn-hidden"><a href="#" target="_blank">terms & conditions</a></div>
                    <div class="btn cookie-btn-hidden"><a href="#" target="_blank">privacy policy</a></div>
                  </div>
              </td>
            </tr>
          </tbody>

          <tbody>
            <tr>
              <td colspan="1">
                <span class="company-details" onclick="cookieDetails(4)">
                  <span class="expand-collapse">+</span>
                  <span>Google Inc.</span>
                </span>
              </td>
              <td colspan="1">google.com, googletagmanager.com, google-analytics.com</td>
              <td>
                <div class="cookie-choice-table">
                  <div onclick="cookieToggleOn(6)" class="btn webdesign cookie-disable">
                    disable
                  </div>
                  <div onclick="cookieToggleOff(6)" class="btn cookie-btn-disabled cookie-enable">
                    enable
                  </div>
                </div>
              </td>
            </tr>
            <tr class="cookie-details-table-hidden" style="display: none;">
              <td colspan="3">
                <div>
                  <div class="btn cookie-btn-hidden"><a href="#" target="_blank">terms & conditions</a></div>
                  <div class="btn cookie-btn-hidden"><a href="#" target="_blank">privacy policy</a></div>
                </div>
              </td>
            </tr>
          </tbody>

          <tbody>
            <tr>
              <td colspan="1">
                <span class="company-details" onclick="cookieDetails(5)">
                  <span class="expand-collapse">+</span>
                  <span>Tawk.to Inc.</span>
                </span>
              </td>
              <td colspan="1">tawk.io</td>
              <td>
                <div class="cookie-choice-table">
                  <div onclick="cookieToggleOn(7)" class="btn webdesign cookie-disable">
                    disable
                  </div>
                  <div onclick="cookieToggleOff(7)" class="btn cookie-btn-disabled cookie-enable">
                    enable
                  </div>
                </div>
              </td>
            </tr>
            <tr class="cookie-details-table-hidden" style="display: none;">
              <td colspan="3">
                <div>
                  <div class="btn cookie-btn-hidden"><a href="#" target="_blank">terms & conditions</a></div>
                  <div class="btn cookie-btn-hidden"><a href="#" target="_blank">privacy policy</a></div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

      <div class="cookie-details-confirmation">
        <div class="btn btn-grey" id="cancel-settings">cancel</div>
        <div class="webdesign btn" id="accept-settings">accept cookies</div>
      </div>

    </div>
    <!-- /Cookie Settings -->

</div>
