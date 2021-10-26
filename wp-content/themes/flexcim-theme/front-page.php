<?php



get_header() 
?>

<main class="page">
    <div class="container-fluid video-header">
        <!-- wp:nk/awb {"type":"yt_vm_video","align":"full","fullHeight":true,"video":"https://www.youtube.com/watch?v=2YBtspm8j8M","videoPosterPreview":"https://img.youtube.com/vi/2YBtspm8j8M/maxresdefault.jpg","color":"rgba(100, 74, 74, 0.55)","ghostkitStyles":{},"ghostkitClassname":"nk-awb-2k33LO","ghostkitId":"2k33LO"} -->
        <div class="wp-block-nk-awb nk-awb alignfull nk-awb-fullheight nk-awb-content-valign-center"><div class="nk-awb-wrap" data-awb-type="yt_vm_video" data-awb-video="https://www.youtube.com/watch?v=2YBtspm8j8M" data-awb-video-mobile="false"><div class="nk-awb-overlay" style="background-color: rgba(100, 74, 74, 0.55);"></div><div class="nk-awb-inner"></div></div><!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:nk/awb -->
    </div>
 
    <div class="test">
        <div class="container shopify">
            <div class="row">
                
                <div class="col-md-4">
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
        
                <div class="col-md-4">
                    <div id='product-component-1635275805695'></div>
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
                            node: document.getElementById('product-component-1635275805695'),
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

                <div class="col-md-4">
                    <div id='product-component-1635276113371'></div>
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
                            id: '6940497674401',
                            node: document.getElementById('product-component-1635276113371'),
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
            </div>
        </div>
        
    </div>
</main>



<?php

get_footer() 
?>