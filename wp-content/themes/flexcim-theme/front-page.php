<?php



get_header() 
?>

<main class="page homepage">
    <div class="container-fluid video-header">
        <!-- wp:nk/awb {"type":"yt_vm_video","align":"full","fullHeight":true,"video":"https://www.youtube.com/watch?v=2YBtspm8j8M","videoPosterPreview":"https://img.youtube.com/vi/2YBtspm8j8M/maxresdefault.jpg","color":"rgba(100, 74, 74, 0.55)","ghostkitStyles":{},"ghostkitClassname":"nk-awb-2k33LO","ghostkitId":"2k33LO"} -->
        <div class="wp-block-nk-awb nk-awb alignfull nk-awb-fullheight nk-awb-content-valign-center">
            <div class="nk-awb-wrap" data-awb-type="yt_vm_video" data-awb-video="https://www.youtube.com/watch?v=2YBtspm8j8M" data-awb-video-mobile="false">
                <div class="nk-awb-overlay" style="background-color: rgba(100, 74, 74, 0.55);"></div>
                <div class="nk-awb-inner"></div>
            </div><!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:nk/awb -->
    </div>

    <div class="container-fluid about-section">
        <div class="row">
            <div class="col-md-12 home-heading">
                <h3>About</h3>
            </div>
            <div class="col-lg-6 col-md-12">
                
                <img class="about-home-img" src="http://localhost/flexcim/wp-content/uploads/2021/11/IMG_21361-web.jpg" alt="Flexcim Group Photo">
            </div>
            <div class="col-lg-6 col-md-12 home-content">
                <p>I'm baby activated charcoal kogi gochujang pinterest flannel next level whatever. Umami skateboard chambray tacos, celiac woke migas stumptown marfa heirloom gentrify semiotics ethical artisan. Coloring book pok pok hexagon pork belly cardigan celiac artisan pinterest brunch single-origin coffee humblebrag pabst unicorn. Asymmetrical drinking vinegar hashtag cronut readymade polaroid lyft DIY ennui. Everyday carry pour-over williamsburg fam, heirloom cronut disrupt unicorn pitchfork banh mi. Fam raclette biodiesel, leggings man bun edison bulb shabby chic. Authentic mlkshk gluten-free cold-pressed typewriter echo park bushwick truffaut mustache four loko viral chillwave poke.</p>
                <p><a href="#">Learn More</a>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid test">
        <div class="row">
            <div class="col-sm-12">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div id='product-component-1635970124266'></div>
                        <script type="text/javascript">
                        /*<![CDATA[*/
                        (function () {
                            var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
                            if (window.ShopifyBuy) {
                                if (window.ShopifyBuy.UI) {
                                    ShopifyBuyInit();
                                } else {
                                    loadScript();
                                }
                            } else {
                                loadScript();
                            }
                            function loadScript() {
                                var script = document.createElement('script');
                                script.async = true;
                                script.src = scriptURL;
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                                script.onload = ShopifyBuyInit;
                            }
                            function ShopifyBuyInit() {
                                var client = ShopifyBuy.buildClient({
                                    domain: 'flexcim-molds.myshopify.com',
                                    storefrontAccessToken: '037a617e8773cf7daa855a31c867b456',
                                });
                                ShopifyBuy.UI.onReady(client).then(function (ui) {
                                    ui.createComponent('product', {
                                        id: '7020484034721',
                                        node: document.getElementById('product-component-1635970124266'),
                                        moneyFormat: '%24%7B%7Bamount%7D%7D%20CAD',
                                        options: {
                                            "product": {
                                                "styles": {
                                                    "product": {
                                                        "@media (min-width: 601px)": {
                                                            "max-width": "calc(25% - 20px)",
                                                            "margin-left": "20px",
                                                            "margin-bottom": "50px"
                                                        }
                                                    },
                                                    "button": {
                                                        "color": "#f8bd1f",
                                                        ":hover": {
                                                            "color": "#f8bd1f",
                                                            "background-color": "#515d6b"
                                                        },
                                                        "background-color": "#5a6777",
                                                        ":focus": {
                                                            "background-color": "#515d6b"
                                                        },
                                                        "border-radius": "25px",
                                                        "padding-left": "36px",
                                                        "padding-right": "36px"
                                                    }
                                                },
                                                "buttonDestination": "modal",
                                                "contents": {
                                                    "options": false
                                                },
                                                "text": {
                                                    "button": "View product"
                                                }
                                            },
                                            "productSet": {
                                                "styles": {
                                                    "products": {
                                                        "@media (min-width: 601px)": {
                                                            "margin-left": "-20px"
                                                        }
                                                    }
                                                }
                                            },
                                            "modalProduct": {
                                                "contents": {
                                                    "img": false,
                                                    "imgWithCarousel": true,
                                                    "button": false,
                                                    "buttonWithQuantity": true
                                                },
                                                "styles": {
                                                    "product": {
                                                        "@media (min-width: 601px)": {
                                                            "max-width": "100%",
                                                            "margin-left": "0px",
                                                            "margin-bottom": "0px"
                                                        }
                                                    },
                                                    "button": {
                                                        "color": "#f8bd1f",
                                                        ":hover": {
                                                            "color": "#f8bd1f",
                                                            "background-color": "#515d6b"
                                                        },
                                                        "background-color": "#5a6777",
                                                        ":focus": {
                                                            "background-color": "#515d6b"
                                                        },
                                                        "border-radius": "25px",
                                                        "padding-left": "36px",
                                                        "padding-right": "36px"
                                                    }
                                                },
                                                "text": {
                                                    "button": "Add to cart"
                                                }
                                            },
                                            "option": {},
                                            "cart": {
                                                "styles": {
                                                    "button": {
                                                        "color": "#f8bd1f",
                                                        ":hover": {
                                                            "color": "#f8bd1f",
                                                            "background-color": "#515d6b"
                                                        },
                                                        "background-color": "#5a6777",
                                                        ":focus": {
                                                            "background-color": "#515d6b"
                                                        },
                                                        "border-radius": "25px"
                                                    }
                                                },
                                                "text": {
                                                    "total": "Subtotal",
                                                    "notice": "",
                                                    "button": "Checkout"
                                                }
                                            },
                                            "toggle": {
                                                "styles": {
                                                    "toggle": {
                                                        "background-color": "#5a6777",
                                                        ":hover": {
                                                            "background-color": "#515d6b"
                                                        },
                                                        ":focus": {
                                                            "background-color": "#515d6b"
                                                        }
                                                    },
                                                    "count": {
                                                        "color": "#f8bd1f",
                                                        ":hover": {
                                                            "color": "#f8bd1f"
                                                        }
                                                    },
                                                    "iconPath": {
                                                        "fill": "#f8bd1f"
                                                    }
                                                }
                                            }
                                        },
                                    });
                                });
                            }
                        })();
                        /*]]>*/
                        </script>
                    </div>
                    <div class="carousel-item">
                        <img src="http://localhost/flexcim/wp-content/uploads/2021/09/edmonton.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <div id='product-component-1635949005137'></div>
                            <script type="text/javascript">
                            /*<![CDATA[*/
                            (function () {
                                var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
                                if (window.ShopifyBuy) {
                                    if (window.ShopifyBuy.UI) {
                                        ShopifyBuyInit();
                                    } else {
                                        loadScript();
                                    }
                                } else {
                                    loadScript();
                                }
                                function loadScript() {
                                    var script = document.createElement('script');
                                    script.async = true;
                                    script.src = scriptURL;
                                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                                    script.onload = ShopifyBuyInit;
                                }
                                function ShopifyBuyInit() {
                                    var client = ShopifyBuy.buildClient({
                                        domain: 'flexcim-molds.myshopify.com',
                                        storefrontAccessToken: '037a617e8773cf7daa855a31c867b456',
                                    });
                                    ShopifyBuy.UI.onReady(client).then(function (ui) {
                                        ui.createComponent('product', {
                                            id: '6940506718369',
                                            node: document.getElementById('product-component-1635949005137'),
                                            moneyFormat: '%24%7B%7Bamount%7D%7D%20CAD',
                                            options: {
                                                "product": {
                                                    "styles": {
                                                        "product": {
                                                            "@media (min-width: 601px)": {
                                                                "max-width": "calc(25% - 20px)",
                                                                "margin-left": "20px",
                                                                "margin-bottom": "50px"
                                                            }
                                                        },
                                                        "button": {
                                                            "color": "#f8bd1f",
                                                            ":hover": {
                                                                "color": "#f8bd1f",
                                                                "background-color": "#515d6b"
                                                            },
                                                            "background-color": "#5a6777",
                                                            ":focus": {
                                                                "background-color": "#515d6b"
                                                            },
                                                            "border-radius": "25px",
                                                            "padding-left": "36px",
                                                            "padding-right": "36px"
                                                        }
                                                    },
                                                    "buttonDestination": "modal",
                                                    "contents": {
                                                        "options": false
                                                    },
                                                    "text": {
                                                        "button": "View product"
                                                    }
                                                },
                                                "productSet": {
                                                    "styles": {
                                                        "products": {
                                                            "@media (min-width: 601px)": {
                                                                "margin-left": "-20px"
                                                            }
                                                        }
                                                    }
                                                },
                                                "modalProduct": {
                                                    "contents": {
                                                        "img": false,
                                                        "imgWithCarousel": true,
                                                        "button": false,
                                                        "buttonWithQuantity": true
                                                    },
                                                    "styles": {
                                                        "product": {
                                                            "@media (min-width: 601px)": {
                                                                "max-width": "100%",
                                                                "margin-left": "0px",
                                                                "margin-bottom": "0px"
                                                            }
                                                        },
                                                        "button": {
                                                            "color": "#f8bd1f",
                                                            ":hover": {
                                                                "color": "#f8bd1f",
                                                                "background-color": "#515d6b"
                                                            },
                                                            "background-color": "#5a6777",
                                                            ":focus": {
                                                                "background-color": "#515d6b"
                                                            },
                                                            "border-radius": "25px",
                                                            "padding-left": "36px",
                                                            "padding-right": "36px"
                                                        }
                                                    },
                                                    "text": {
                                                        "button": "Add to cart"
                                                    }
                                                },
                                                "option": {},
                                                "cart": {
                                                    "styles": {
                                                        "button": {
                                                            "color": "#f8bd1f",
                                                            ":hover": {
                                                                "color": "#f8bd1f",
                                                                "background-color": "#515d6b"
                                                            },
                                                            "background-color": "#5a6777",
                                                            ":focus": {
                                                                "background-color": "#515d6b"
                                                            },
                                                            "border-radius": "25px"
                                                        }
                                                    },
                                                    "text": {
                                                        "total": "Subtotal",
                                                        "notice": "",
                                                        "button": "Checkout"
                                                    }
                                                },
                                                "toggle": {
                                                    "styles": {
                                                        "toggle": {
                                                            "background-color": "#5a6777",
                                                            ":hover": {
                                                                "background-color": "#515d6b"
                                                            },
                                                            ":focus": {
                                                                "background-color": "#515d6b"
                                                            }
                                                        },
                                                        "count": {
                                                            "color": "#f8bd1f",
                                                            ":hover": {
                                                                "color": "#f8bd1f"
                                                            }
                                                        },
                                                        "iconPath": {
                                                            "fill": "#f8bd1f"
                                                        }
                                                    }
                                                }
                                            },
                                        });
                                    })
                                }
                            })();
                            /*]]>*/
                            </script>
   
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div> -->


    <div class="container-fluid service-section">
        <div class="row">
            <div class="col-md-12 home-heading">
            <h3>Services</h3>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front first-service">
                            
                            <h4 class="flip-heading-front flip-first">Product Development</h4>
                        </div>
                        <div class="flip-card-back">
                            <h4 class="flip-heading-back">Service #1</h4>
                            <p>I'm baby activated charcoal kogi gochujang pinterest flannel next level whatever. Umami skateboard chambray tacos, celiac woke migas stumptown marfa heirloom gentrify semiotics ethical artisan.</p>

                            <p><a href="#">Learn More...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front second-service">
                            <h4 class="flip-heading-front">Injection Molding</h4>
                        </div>
                        <div class="flip-card-back">
                            <h4 class="flip-heading-back">Service #2</h4>
                            <p>I'm baby activated charcoal kogi gochujang pinterest flannel next level whatever. Umami skateboard chambray tacos, celiac woke migas stumptown marfa heirloom gentrify semiotics ethical artisan.</p>

                            <p><a href="#">Learn More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front third-service">
                            <h4 class="flip-heading-front ">CNC Machining</h4>
                        </div>
                        <div class="flip-card-back">
                            <h4 class="flip-heading-back">Service #3</h4>
                            <p>I'm baby activated charcoal kogi gochujang pinterest flannel next level whatever. Umami skateboard chambray tacos, celiac woke migas stumptown marfa heirloom gentrify semiotics ethical artisan.</p>

                            <p><a href="#">Learn More...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front fourth-service">
                            <h4 class="flip-heading-front ">Prototyping</h4>
                        </div>
                        <div class="flip-card-back">
                            <h4 class="flip-heading-back">Service #4</h4>
                            <p>I'm baby activated charcoal kogi gochujang pinterest flannel next level whatever. Umami skateboard chambray tacos, celiac woke migas stumptown marfa heirloom gentrify semiotics ethical artisan.</p>

                            <p><a href="#">Learn More...</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div><!--End of Row-->
    </div>
    
    

    
    

    <!-- <div class="container-fluid test">
        <div class="row">
            <div class="col-sm-12">
                <div id="homeCarousel" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div id='product-component-1635949005137'></div>
                            <script type="text/javascript">
                            /*<![CDATA[*/
                            (function () {
                                var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
                                if (window.ShopifyBuy) {
                                    if (window.ShopifyBuy.UI) {
                                        ShopifyBuyInit();
                                    } else {
                                        loadScript();
                                    }
                                } else {
                                    loadScript();
                                }
                                function loadScript() {
                                    var script = document.createElement('script');
                                    script.async = true;
                                    script.src = scriptURL;
                                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                                    script.onload = ShopifyBuyInit;
                                }
                                function ShopifyBuyInit() {
                                    var client = ShopifyBuy.buildClient({
                                        domain: 'flexcim-molds.myshopify.com',
                                        storefrontAccessToken: '037a617e8773cf7daa855a31c867b456',
                                    });
                                    ShopifyBuy.UI.onReady(client).then(function (ui) {
                                        ui.createComponent('product', {
                                            id: '6940506718369',
                                            node: document.getElementById('product-component-1635949005137'),
                                            moneyFormat: '%24%7B%7Bamount%7D%7D%20CAD',
                                            options: {
                                                "product": {
                                                    "styles": {
                                                        "product": {
                                                            "@media (min-width: 601px)": {
                                                                "max-width": "calc(25% - 20px)",
                                                                "margin-left": "20px",
                                                                "margin-bottom": "50px"
                                                            }
                                                        },
                                                        "button": {
                                                            "color": "#f8bd1f",
                                                            ":hover": {
                                                                "color": "#f8bd1f",
                                                                "background-color": "#515d6b"
                                                            },
                                                            "background-color": "#5a6777",
                                                            ":focus": {
                                                                "background-color": "#515d6b"
                                                            },
                                                            "border-radius": "25px",
                                                            "padding-left": "36px",
                                                            "padding-right": "36px"
                                                        }
                                                    },
                                                    "buttonDestination": "modal",
                                                    "contents": {
                                                        "options": false
                                                    },
                                                    "text": {
                                                        "button": "View product"
                                                    }
                                                },
                                                "productSet": {
                                                    "styles": {
                                                        "products": {
                                                            "@media (min-width: 601px)": {
                                                                "margin-left": "-20px"
                                                            }
                                                        }
                                                    }
                                                },
                                                "modalProduct": {
                                                    "contents": {
                                                        "img": false,
                                                        "imgWithCarousel": true,
                                                        "button": false,
                                                        "buttonWithQuantity": true
                                                    },
                                                    "styles": {
                                                        "product": {
                                                            "@media (min-width: 601px)": {
                                                                "max-width": "100%",
                                                                "margin-left": "0px",
                                                                "margin-bottom": "0px"
                                                            }
                                                        },
                                                        "button": {
                                                            "color": "#f8bd1f",
                                                            ":hover": {
                                                                "color": "#f8bd1f",
                                                                "background-color": "#515d6b"
                                                            },
                                                            "background-color": "#5a6777",
                                                            ":focus": {
                                                                "background-color": "#515d6b"
                                                            },
                                                            "border-radius": "25px",
                                                            "padding-left": "36px",
                                                            "padding-right": "36px"
                                                        }
                                                    },
                                                    "text": {
                                                        "button": "Add to cart"
                                                    }
                                                },
                                                "option": {},
                                                "cart": {
                                                    "styles": {
                                                        "button": {
                                                            "color": "#f8bd1f",
                                                            ":hover": {
                                                                "color": "#f8bd1f",
                                                                "background-color": "#515d6b"
                                                            },
                                                            "background-color": "#5a6777",
                                                            ":focus": {
                                                                "background-color": "#515d6b"
                                                            },
                                                            "border-radius": "25px"
                                                        }
                                                    },
                                                    "text": {
                                                        "total": "Subtotal",
                                                        "notice": "",
                                                        "button": "Checkout"
                                                    }
                                                },
                                                "toggle": {
                                                    "styles": {
                                                        "toggle": {
                                                            "background-color": "#5a6777",
                                                            ":hover": {
                                                                "background-color": "#515d6b"
                                                            },
                                                            ":focus": {
                                                                "background-color": "#515d6b"
                                                            }
                                                        },
                                                        "count": {
                                                            "color": "#f8bd1f",
                                                            ":hover": {
                                                                "color": "#f8bd1f"
                                                            }
                                                        },
                                                        "iconPath": {
                                                            "fill": "#f8bd1f"
                                                        }
                                                    }
                                                }
                                            },
                                        });
                                    });
                                }
                            })();
                            /*]]>*/
                            </script>
                        </div>   
                    </div>
                    <div class="carousel-item">
                        <div id='product-component-1635970124266'></div>
                        <script type="text/javascript">
                        /*<![CDATA[*/
                        (function () {
                            var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
                            if (window.ShopifyBuy) {
                                if (window.ShopifyBuy.UI) {
                                    ShopifyBuyInit();
                                } else {
                                    loadScript();
                                }
                            } else {
                                loadScript();
                            }
                            function loadScript() {
                                var script = document.createElement('script');
                                script.async = true;
                                script.src = scriptURL;
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                                script.onload = ShopifyBuyInit;
                            }
                            function ShopifyBuyInit() {
                                var client = ShopifyBuy.buildClient({
                                    domain: 'flexcim-molds.myshopify.com',
                                    storefrontAccessToken: '037a617e8773cf7daa855a31c867b456',
                                });
                                ShopifyBuy.UI.onReady(client).then(function (ui) {
                                    ui.createComponent('product', {
                                        id: '7020484034721',
                                        node: document.getElementById('product-component-1635970124266'),
                                        moneyFormat: '%24%7B%7Bamount%7D%7D%20CAD',
                                        options: {
                                            "product": {
                                                "styles": {
                                                    "product": {
                                                        "@media (min-width: 601px)": {
                                                            "max-width": "calc(25% - 20px)",
                                                            "margin-left": "20px",
                                                            "margin-bottom": "50px"
                                                        }
                                                    },
                                                    "button": {
                                                        "color": "#f8bd1f",
                                                        ":hover": {
                                                            "color": "#f8bd1f",
                                                            "background-color": "#515d6b"
                                                        },
                                                        "background-color": "#5a6777",
                                                        ":focus": {
                                                            "background-color": "#515d6b"
                                                        },
                                                        "border-radius": "25px",
                                                        "padding-left": "36px",
                                                        "padding-right": "36px"
                                                    }
                                                },
                                                "buttonDestination": "modal",
                                                "contents": {
                                                    "options": false
                                                },
                                                "text": {
                                                    "button": "View product"
                                                }
                                            },
                                            "productSet": {
                                                "styles": {
                                                    "products": {
                                                        "@media (min-width: 601px)": {
                                                            "margin-left": "-20px"
                                                        }
                                                    }
                                                }
                                            },
                                            "modalProduct": {
                                                "contents": {
                                                    "img": false,
                                                    "imgWithCarousel": true,
                                                    "button": false,
                                                    "buttonWithQuantity": true
                                                },
                                                "styles": {
                                                    "product": {
                                                        "@media (min-width: 601px)": {
                                                            "max-width": "100%",
                                                            "margin-left": "0px",
                                                            "margin-bottom": "0px"
                                                        }
                                                    },
                                                    "button": {
                                                        "color": "#f8bd1f",
                                                        ":hover": {
                                                            "color": "#f8bd1f",
                                                            "background-color": "#515d6b"
                                                        },
                                                        "background-color": "#5a6777",
                                                        ":focus": {
                                                            "background-color": "#515d6b"
                                                        },
                                                        "border-radius": "25px",
                                                        "padding-left": "36px",
                                                        "padding-right": "36px"
                                                    }
                                                },
                                                "text": {
                                                    "button": "Add to cart"
                                                }
                                            },
                                            "option": {},
                                            "cart": {
                                                "styles": {
                                                    "button": {
                                                        "color": "#f8bd1f",
                                                        ":hover": {
                                                            "color": "#f8bd1f",
                                                            "background-color": "#515d6b"
                                                        },
                                                        "background-color": "#5a6777",
                                                        ":focus": {
                                                            "background-color": "#515d6b"
                                                        },
                                                        "border-radius": "25px"
                                                    }
                                                },
                                                "text": {
                                                    "total": "Subtotal",
                                                    "notice": "",
                                                    "button": "Checkout"
                                                }
                                            },
                                            "toggle": {
                                                "styles": {
                                                    "toggle": {
                                                        "background-color": "#5a6777",
                                                        ":hover": {
                                                            "background-color": "#515d6b"
                                                        },
                                                        ":focus": {
                                                            "background-color": "#515d6b"
                                                        }
                                                    },
                                                    "count": {
                                                        "color": "#f8bd1f",
                                                        ":hover": {
                                                            "color": "#f8bd1f"
                                                        }
                                                    },
                                                    "iconPath": {
                                                        "fill": "#f8bd1f"
                                                    }
                                                }
                                            }
                                        },
                                    });
                                });
                            }
                        })();
                        /*]]>*/
                        </script>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
     </div> -->
     
    
    <div class="container-fluid shopify">
        <div class="row">
            <div class="col-sm-12 home-heading">
            <h3>Store</h3>
            </div>
            <div class="col-sm-12 col-md-7 shopify-summary">
                <p>Palo santo deep v echo park, trust fund air plant wolf copper mug pitchfork austin bushwick sriracha keytar la croix kogi butcher. Biodiesel air plant 8-bit, helvetica pug seitan craft beer austin try-hard poutine gentrify tattooed gluten-free. Listicle humblebrag succulents, shaman fixie hot chicken affogato subway tile venmo kinfolk green juice readymade. Vice cred meggings lomo occupy semiotics readymade 90's trust fund health goth brooklyn etsy. Af coloring book shaman chambray vegan. Beard waistcoat brunch vinyl glossier etsy heirloom. Leggings cronut af cliche taxidermy lo-fi.</p>
            </div>
            <div class="col-sm-12 col-md-5">
                <div id='product-component-1635275951162'></div>
                <script type="text/javascript">
                /*<![CDATA[*/
                (function () {
                    var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
                    if (window.ShopifyBuy) {
                        if (window.ShopifyBuy.UI) {
                            ShopifyBuyInit();
                        } else {
                            loadScript();
                        }
                    } else {
                        loadScript();
                    }
                    function loadScript() {
                        var script = document.createElement('script');
                        script.async = true;
                        script.src = scriptURL;
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                        script.onload = ShopifyBuyInit;
                    }
                    function ShopifyBuyInit() {
                        var client = ShopifyBuy.buildClient({
                            domain: 'flexcim-molds.myshopify.com',
                            storefrontAccessToken: '037a617e8773cf7daa855a31c867b456',
                        });
                        ShopifyBuy.UI.onReady(client).then(function (ui) {
                            ui.createComponent('product', {
                                id: '6931282362529',
                                node: document.getElementById('product-component-1635275951162'),
                                moneyFormat: '%24%7B%7Bamount%7D%7D%20CAD',
                                options: {
                                    "product": {
                                        "styles": {
                                            "product": {
                                                "@media (min-width: 601px)": {
                                                    "max-width": "calc(25% - 20px)",
                                                    "margin-left": "20px",
                                                    "margin-bottom": "50px"
                                                }
                                            },
                                            "button": {
                                                "color": "#f8bd1f",
                                                ":hover": {
                                                    "color": "#f8bd1f",
                                                    "background-color": "#515d6b"
                                                },
                                                "background-color": "#5a6777",
                                                ":focus": {
                                                    "background-color": "#515d6b"
                                                }
                                            }
                                        },
                                        "buttonDestination": "modal",
                                        "contents": {
                                            "options": false
                                        },
                                        "width": "280px",
                                        "text": {
                                            "button": "View product"
                                        }
                                    },
                                    "productSet": {
                                        "styles": {
                                            "products": {
                                                "@media (min-width: 601px)": {
                                                    "margin-left": "-20px"
                                                }
                                            }
                                        }
                                    },
                                    "modalProduct": {
                                        "contents": {
                                            "img": false,
                                            "imgWithCarousel": true,
                                            "button": false,
                                            "buttonWithQuantity": true
                                        },
                                        "styles": {
                                            "product": {
                                                "@media (min-width: 601px)": {
                                                    "max-width": "100%",
                                                    "margin-left": "0px",
                                                    "margin-bottom": "0px"
                                                }
                                            },
                                            "button": {
                                                "color": "#f8bd1f",
                                                 ":hover": {
                                                    "color": "#f8bd1f",
                                                    "background-color": "#515d6b"
                                                },
                                                "background-color": "#5a6777",
                                                ":focus": {
                                                    "background-color": "#515d6b"
                                                }
                                            }
                                        },
                                        "text": {
                                            "button": "Add to cart"
                                        }
                                    },
                                    "option": {},
                                    "cart": {
                                        "styles": {
                                            "button": {
                                                "color": "#f8bd1f",
                                                ":hover": {
                                                    "color": "#f8bd1f",
                                                    "background-color": "#515d6b"
                                                },
                                                "background-color": "#5a6777",
                                                ":focus": {
                                                    "background-color": "#515d6b"
                                                }
                                            }
                                        },
                                        "text": {
                                            "total": "Subtotal",
                                            "button": "Checkout"
                                        }
                                    },
                                    "toggle": {
                                        "styles": {
                                            "toggle": {
                                                "background-color": "#5a6777",
                                                ":hover": {
                                                    "background-color": "#515d6b"
                                                },
                                                ":focus": {
                                                    "background-color": "#515d6b"
                                                }
                                            },
                                            "count": {
                                                "color": "#f8bd1f",
                                                ":hover": {
                                                    "color": "#f8bd1f"
                                                }
                                            },
                                            "iconPath": {
                                                "fill": "#f8bd1f"
                                            }
                                        }
                                    }
                                },
                            });
                        });
                    }
                })();
                /*]]>*/
                </script>
            </div>
        </div><!--end of row-->

      
    </div>

    <div class="container-fluid resource-section">
        <div class="row">
            <div class="col-md-12 home-heading">
            <h3>Resources</h3>
            </div>
            <div class="col-md-4 col-sm-12">
            <?php echo do_shortcode('[oxilab_flip_box  id="2"]'); ?>
            </div>
            <div class="col-md-4 col-sm-12">
            <?php echo do_shortcode('[oxilab_flip_box  id="2"]'); ?>
            </div>
            <div class="col-md-4 col-sm-12">
            <?php echo do_shortcode('[oxilab_flip_box  id="2"]'); ?>
            </div>
        </div>
    </div>
    
</main>

<script>
    setTimeout(() => {
        document.querySelector("#product-component-1635949005137 > iframe").style.height = "360px";

 console.log("ready");
     }, 5000);

</script>


<?php

get_footer() 
?>