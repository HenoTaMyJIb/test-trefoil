/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
require("justifiedGallery");
import gRecaptcha from "@finpo/vue2-recaptcha-invisible";

window.Vue = require("vue");

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component("example", require("./components/Example.vue"));

const app = new Vue({
    el: "#app",

    data() {
        return {
            contactName: "",
            contactEmail: "",
            contactMessage: "",
            contactLoading: false,
            nameHasErrors: false,
            emailHasErrors: false,
            messageHasErrors: false,
            showSentAlert: false
        };
    },

    mounted() {
        $(".justified-gallery").justifiedGallery({
            rowHeight: 90,
            lastRow: "nojustify",
            margins: 3
        });
    },

    methods: {
        prepare() {
            if (this.contactName.length === 0) {
                this.nameHasErrors = true;
            } else {
                this.nameHasErrors = false;
            }
            if (this.contactEmail.length === 0) {
                this.emailHasErrors = true;
            } else {
                this.emailHasErrors = false;
            }
            if (this.contactMessage.length === 0) {
                this.messageHasErrors = true;
            } else {
                this.messageHasErrors = false;
            }
            return !this.messageHasErrors && !this.emailHasErrors && !this.nameHasErrors;
        },
        sendFeedback(token) {
            this.contactLoading = true;
            this.showSentAlert = false;
            axios
                .post("/feedback", {
                    name: this.contactName,
                    email: this.contactEmail,
                    message: this.contactMessage,
                    "g-recaptcha-response": token
                })
                .then(response => {
                    this.contactLoading = false;
                    this.contactName = "";
                    this.contactEmail = "";
                    this.contactMessage = "";
                    this.showSentAlert = true;
                })
                .catch(error => {
                    this.contactLoading = false;
                });
        }
    },

    components: {
        gRecaptcha
    }
});
