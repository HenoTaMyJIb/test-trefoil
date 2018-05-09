/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
require("lightgallery.js");
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
        $(".justified-gallery")
            .justifiedGallery({
                rowHeight: 90,
                lastRow: "nojustify",
                margins: 3
            })
            .on("jg.complete", function() {
                lightGallery(document.getElementById("gallery-container"), {
                    download: false
                });
            });

        var $allVideos = $("iframe[src^='//www.youtube.com']"),
            // The element that is fluid width
            $fluidEl = $("body");

        // Figure out and save aspect ratio for each video
        $allVideos.each(function() {
            $(this)
                .data("aspectRatio", this.height / this.width)

                // and remove the hard coded width/height
                .removeAttr("height")
                .removeAttr("width");
        });

        // When the window is resized
        $(window)
            .resize(function() {
                var newWidth = $fluidEl.width();

                // Resize all videos according to their own aspect ratio
                $allVideos.each(function() {
                    var $el = $(this);
                    $el.width(newWidth).height(newWidth * $el.data("aspectRatio"));
                });

                // Kick off one resize to fix all videos on page load
            })
            .resize();
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
