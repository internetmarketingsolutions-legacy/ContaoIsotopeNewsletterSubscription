### installation

1. install the module
2. create a new form, or update ones with a checkbox fieldname "newsletter", one option, value "x", label "i wish to receive a newsletter"
3. register this form in the checkout module as "order conditions form"
4. create a new front end module newslettersubscription (isotope section) and place it on a page (with a ccontent element for example)
4. create a new mail template in the "e-mail manager" of isotope, call it something like "newsletter subscription"
5. add a new language within the mail template and place a link like: "{{env::path}}{{link_url::75}}?hash=##iso_newsletter_subscription_hash##", replace the id 75 with the id of the page with the newslettersubscription front end module
