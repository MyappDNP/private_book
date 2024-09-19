"use strict";
let isRtl = false,
    isDarkStyle = false,
    menu, animate, isHorizontalLayout = !1;
document.getElementById("layout-menu") && (isHorizontalLayout = document.getElementById("layout-menu").classList.contains("menu-horizontal")),
    function() {
        let d = document.querySelectorAll("#layout-menu"),
            u = (d.forEach(function(e) {
                menu = new Menu(e, {
                    orientation: "vertical",
                    //closeChildren: !!isHorizontalLayout,
                    //showDropdownOnHover: localStorage.getItem("templateCustomizer-" + templateName + "--ShowDropdownOnHover") ? "true" === localStorage.getItem("templateCustomizer-" + templateName + "--ShowDropdownOnHover") : void 0 === window.templateCustomizer || window.templateCustomizer.settings.defaultShowDropdownOnHover
                }), window.Helpers.scrollToActive(animate = !1), window.Helpers.mainMenu = menu
            }), document.querySelectorAll(".layout-menu-toggle"));
        u.forEach(e => {
            e.addEventListener("click", e => {
                if (e.preventDefault(), window.Helpers.toggleCollapsed(), config.enableMenuLocalStorage && !window.Helpers.isSmallScreen()) try {
                    localStorage.setItem("templateCustomizer-" + templateName + "--LayoutCollapsed", String(window.Helpers.isCollapsed()))
                } catch (e) {}
            })
        });
        if (document.getElementById("layout-menu")) {
            var t = document.getElementById("layout-menu");
            var o = function() {
                Helpers.isSmallScreen() || document.querySelector(".layout-menu-toggle").classList.add("d-block")
            };
            let e = null;
            t.onmouseenter = function() {
                e = Helpers.isSmallScreen() ? setTimeout(o, 0) : setTimeout(o, 300)
            }, t.onmouseleave = function() {
                document.querySelector(".layout-menu-toggle").classList.remove("d-block"), clearTimeout(e)
            }
        }
       
        // function r(e) {
        //     "show.bs.collapse" == e.type || "show.bs.collapse" == e.type ? e.target.closest(".accordion-item").classList.add("active") : e.target.closest(".accordion-item").classList.remove("active")
        // }
        // const m = document.querySelector(".dropdown-notifications-all"),
        //     c = document.querySelectorAll(".dropdown-notifications-read"),
        //     p = (m && m.addEventListener("click", e => {
        //         c.forEach(e => {
        //             e.closest(".dropdown-notifications-item").classList.add("marked-as-read")
        //         })
        //     }), c && c.forEach(t => {
        //         t.addEventListener("click", e => {
        //             t.closest(".dropdown-notifications-item").classList.toggle("marked-as-read")
        //         })
        //     }), document.querySelectorAll(".dropdown-notifications-archive")),
        //     g = (p.forEach(t => {
        //         t.addEventListener("click", e => {
        //             t.closest(".dropdown-notifications-item").remove()
        //         })
        //     }), [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))),
        //     w = (g.map(function(e) {
        //         return new bootstrap.Tooltip(e)
        //     }), [].slice.call(document.querySelectorAll(".accordion")));
        // w.map(function(e) {
        //     e.addEventListener("show.bs.collapse", r), e.addEventListener("hide.bs.collapse", r)
        // });
        if (isRtl && Helpers._addClass("dropdown-menu-end", document.querySelectorAll("#layout-navbar .dropdown-menu")), window.Helpers.setAutoUpdate(!0), window.Helpers.initPasswordToggle(), window.Helpers.initSpeechToText(), window.Helpers.initNavbarDropdownScrollbar(), window.addEventListener("resize", function(e) {
                window.innerWidth >= window.Helpers.LAYOUT_BREAKPOINT && document.querySelector(".search-input-wrapper") && (document.querySelector(".search-input-wrapper").classList.add("d-none"), document.querySelector(".search-input").value = ""), document.querySelector("[data-template^='horizontal-menu']") && setTimeout(function() {
                    window.innerWidth < window.Helpers.LAYOUT_BREAKPOINT ? document.getElementById("layout-menu").classList.contains("menu-horizontal") && menu.switchMenu("vertical") : document.getElementById("layout-menu").classList.contains("menu-vertical") && menu.switchMenu("horizontal")
                }, 100)
            }, !0), !isHorizontalLayout && !window.Helpers.isSmallScreen() && ("undefined" != typeof TemplateCustomizer && window.templateCustomizer.settings.defaultMenuCollapsed && window.Helpers.setCollapsed(!0, !1), "undefined" != typeof config && config.enableMenuLocalStorage)) 
            try {
            null !== localStorage.getItem("templateCustomizer-" + templateName + "--LayoutCollapsed") && "false" !== localStorage.getItem("templateCustomizer-" + templateName + "--LayoutCollapsed") && window.Helpers.setCollapsed("true" === localStorage.getItem("templateCustomizer-" + templateName + "--LayoutCollapsed"), !1)
        } catch (e) {}
    }(), "undefined" != typeof $ && $(function() {
        window.Helpers.initSidebarToggle();
        var t, o, e, n = $(".search-toggler"),
            s = $(".search-input-wrapper"),
            a = $(".search-input"),
            l = $(".content-backdrop");
        n.length && n.on("click", function() {
            s.length && (s.toggleClass("d-none"), a.focus())
        }), a.on("focus", function() {
            s.hasClass("container-xxl") && s.find(".twitter-typeahead").addClass("container-xxl")
        }).responseJSON, a.each(function() {
            var e = $(this);
            a.typeahead({
                hint: !1,
                classNames: {
                    menu: "tt-menu navbar-search-suggestion",
                    cursor: "active",
                    suggestion: "suggestion d-flex justify-content-between px-3 py-2 w-100"
                }
            }).bind("typeahead:render", function() {
                //l.addClass("show").removeClass("fade")
            }).bind("typeahead:select", function(e, t) {
                //t.url && (window.location = t.url)
            }).bind("typeahead:close", function() {
                a.val(""), e.typeahead("val", ""), s.addClass("d-none"), l.addClass("fade").removeClass("show")
            }), a.on("keyup", function() {
                "" == a.val() && l.addClass("fade").removeClass("show")
            })
        }), $(".navbar-search-suggestion").each(function() {
            e = new PerfectScrollbar($(this)[0], {
                wheelPropagation: !1,
                suppressScrollX: !0
            })
        }), a.on("keyup", function() {
            e.update()
        })
    });