<html>

<head>
    <!-- vue-->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/5.11.2/css/all.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<style>
    table td {
        text-align: center;
        vertical-align: middle;
        padding: .25rem;
        border: solid 1px black;
    }
    .mytable {
        width: 100%;
        border-radius: 20px;
        border: solid 1px black;
    }

    .mytext {
        display: block;
        width: 100%;
        height: calc(2.25rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #ffc0cb00;
        background-clip: padding-box;
        border: 1px solid #ffc0cb00;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        text-align: center;
    }
    .blcard{
        background-color: #add8e6;
        color:white
    }
    .picard{
        background-color: pink;
        color:white
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id='距離' class="col-2">
                <br>
                <div class="card col-12" style="border-radius:8px;">
                    <div class="card-body">
                        <h4 style="color:#F6850E"><b>距離</b></h4>
                        <h5><b>請輸入:</b></h5>
                        <div class="mb-2">毫米<input type="text" class="mytext" v-model="毫米" ></div>
                        <div class="mb-2">公寸<input type="text" class="mytext" v-model="公寸"></div>
                        <div class="mb-2">公分<input class="mytext" type="text" v-model="公分"></div>
                        <div class="mb-2">公尺<input class="mytext" type="text" v-model="公尺"></div>
                        <div class="mb-2">公里<input class="mytext" type="text" v-model="公里"></div>
                        <div class="mb-2">尺<input class="mytext" type="text" v-model="尺"></div>
                        <div class="mb-2">英寸<input class="mytext" type="text" v-model="英寸"></div>
                        <div class="mb-2">英尺<input class="mytext" type="text" v-model="英尺"></div>
                        <div class="mb-2">碼<input class="mytext" type="text" v-model="碼"></div>
                    </div>
                </div>
            </div>
            <div id='質量' class="col-2">
                <br>
                <div class="card col-12" style="border-radius:8px;">
                    <div class="card-body">
                        <h4 style="color:#F6850E"><b>質量</b></h4>
                        <h5><b>請輸入:</b></h5>
                        <div class="mb-2">公克<input type="text" class="mytext" v-model="公克"></div>
                        <div class="mb-2">公兩<input class="mytext" type="text" v-model="公兩"></div>
                        <div class="mb-2">公斤<input class="mytext" type="text" v-model="公斤"></div>
                        <div class="mb-2">公擔<input class="mytext" type="text" v-model="公擔"></div>
                        <div class="mb-2">公噸<input class="mytext" type="text" v-model="公噸"></div>
                        <div class="mb-2">市斤<input class="mytext" type="text" v-model="市斤"></div>
                        <div class="mb-2">台兩<input class="mytext" type="text" v-model="台兩"></div>
                        <div class="mb-2">台斤<input class="mytext" type="text" v-model="台斤"></div>
                        <div class="mb-2">盎司<input class="mytext" type="text" v-model="盎司"></div>
                        <div class="mb-2">磅<input class="mytext" type="text" v-model="磅"></div>
                        <div class="mb-2">克拉<input class="mytext" type="text" v-model="克拉"></div>
                    </div>
                </div>
            </div>
            <div id='面積' class="col-2">
                <br>
                <div class="card col-12" style="border-radius:8px;">
                    <div class="card-body">
                        <h4 style="color:#F6850E"><b>面積</b></h4>
                        <h5><b>請輸入:</b></h5>
                        <div class="mb-2">平方公尺<input type="text" class="mytext" v-model="平方公尺"></div>
                        <div class="mb-2">公畝<input class="mytext" type="text" v-model="公畝"></div>
                        <div class="mb-2">公頃<input class="mytext" type="text" v-model="公頃"></div>
                        <div class="mb-2">市畝<input class="mytext" type="text" v-model="市畝"></div>
                        <div class="mb-2">甲(台灣)<input class="mytext" type="text" v-model="甲"></div>
                        <div class="mb-2">英畝<input class="mytext" type="text" v-model="英畝"></div>
                        <div class="mb-2">美畝<input class="mytext" type="text" v-model="美畝"></div>
                        <div class="mb-2">平方公里<input class="mytext" type="text" v-model="平方公里"></div>
                    </div>
                </div>
            </div>
            <div id='體積' class="col-2">
                <br>
                <div class="card col-12" style="border-radius:8px;">
                    <div class="card-body">
                        <h4 style="color:#F6850E"><b>體積</b></h4>
                        <h5><b>請輸入:</b></h5>
                        <div class="mb-2">毫公升<input type="text" class="mytext" v-model="毫公升"></div>
                        <div class="mb-2">公升<input type="text" class="mytext" v-model="公升"></div>
                        <div class="mb-2">公石(百公升)<input class="mytext" type="text" v-model="公石"></div>
                        <div class="mb-2">公秉(千公升)<input class="mytext" type="text" v-model="公秉"></div>
                        <div class="mb-2">立方公分<input type="text" class="mytext" v-model="立方公分"></div>
                        <div class="mb-2">立方公尺<input type="text" class="mytext" v-model="立方公尺"></div>
                        <div class="mb-2">台升<input class="mytext" type="text" v-model="台升"></div>
                    </div>
                </div>
            </div>
            <div id='時間' class="col-2">
                <br>
                <div class="card col-12" style="border-radius:8px;">
                    <div class="card-body">
                        <h4 style="color:#F6850E"><b>時間</b></h4>
                        <h5><b>請輸入:</b></h5>
                        <div class="mb-2">秒<input type="text" class="mytext" v-model="秒"></div>
                        <div class="mb-2">分<input type="text" class="mytext" v-model="分"></div>
                        <div class="mb-2">時<input class="mytext" type="text" v-model="時"></div>
                        <div class="mb-2">日<input class="mytext" type="text" v-model="日"></div>
                    </div>
                </div>
            </div>
            <div  class="col-2">
            </div>
            <!---<div id='男鞋' class="col-2">
                <br>
                <div class="blcard card col-12" style="border-radius:8px;">
                    <div class="card-body">
                        <h4 style="color:#F6850E"><b>鞋尺寸(男)</b></h4>
                        <div class="mb-2">腳長(cm)
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value">
                                    {{ option.value[0] }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">中國碼
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value">
                                    {{ option.value[1] }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">歐洲碼
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value">
                                    {{ option.value[2] }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">美國碼
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value ">
                                    {{ option.value[3]  }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">韓國碼
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value ">
                                    {{ option.value[4]  }}
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div id='女鞋' class="col-2">
                <br>
                <div class="picard card col-12" style="border-radius:8px;">
                    <div class="card-body">
                        <h4 style="color:#F6850E"><b>鞋尺寸(女)</b></h4>
                        <div class="mb-2">腳長(cm)
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value">
                                    {{ option.value[0] }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">中國碼
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value">
                                    {{ option.value[1] }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">歐洲碼
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value">
                                    {{ option.value[2] }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">美國碼
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value">
                                    {{ option.value[3] }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">韓國碼
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value ">
                                    {{ option.value[4]  }}
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div id='男上衣' class="col-2">
                <br>
                <div class="blcard card col-12" style="border-radius:8px;">
                    <div class="card-body">
                        <h4 style="color:#F6850E"><b>上衣尺寸(男)</b></h4>
                        <h5><b>請輸入:</b></h5>
                        <div class="mb-2">國際
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value">
                                    {{ option.value[0] }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">歐洲
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value">
                                    {{ option.value[1] }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">美國
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value">
                                    {{ option.value[2] }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">韓國(尺碼/胸圍)
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value">
                                    {{ option.value[3] }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">中國
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value ">
                                    {{ option.value[4]  }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">胸圍(cm)
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value ">
                                    {{ option.value[5]  }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">腰圍(cm)
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value ">
                                    {{ option.value[6]  }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">肩寬(cm)
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value ">
                                    {{ option.value[7]  }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">適合身高(cm)
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value ">
                                    {{ option.value[8]  }}
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div id='女上衣' class="col-2">
                <br>
                <div class="picard card col-12" style="border-radius:8px;">
                    <div class="card-body">
                        <h4 style="color:#F6850E"><b>上衣尺寸(女)</b></h4>
                        <h5><b>請輸入:</b></h5>
                        <div class="mb-2">國際
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value">
                                    {{ option.value[0] }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">歐洲
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value">
                                    {{ option.value[1] }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">美國
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value">
                                    {{ option.value[2] }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">韓國(尺碼/胸圍)
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value">
                                    {{ option.value[3] }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">中國
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value ">
                                    {{ option.value[4]  }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">胸圍(cm)
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value ">
                                    {{ option.value[5]  }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">腰圍(cm)
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value ">
                                    {{ option.value[6]  }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">肩寬(cm)
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value ">
                                    {{ option.value[7]  }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-2">適合身高(cm)
                            <select class="mytext" v-model="selected">
                                <option disabled value="">請選擇尺寸</option>
                                <option v-for="option in options" v-bind:value="option.value ">
                                    {{ option.value[8]  }}
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>--->
            

        </div>
    </div>
</body>

</html>

<script>
/* 提示: 單位換算必須用最小單位為主軸，否則會發生錯誤?!*/
    /*距離*/
    new Vue({
        el: '#距離',
        data() {
            return {
                公分: 0
            }
        },
        computed: {
            毫米: {
                get() {
                    return parseFloat((this.公分 * 10).toFixed(3))
                },
                set(val) {
                    this.公分 = parseFloat((val / 10).toFixed(3))
                }
            },
            公寸: {
                get() {
                    return parseFloat((this.公分 / 10).toFixed(3))
                },
                set(val) {
                    this.公分 = parseFloat((val * 10).toFixed(3))
                }
            },
            公尺: {
                //初始值
                get() {
                    return parseFloat((this.公分 / 100).toFixed(3))
                },
                //更動後的值
                set(val) {
                    this.公分 = parseFloat((val * 100).toFixed(3))
                }
            },
            公里: {
                get() {
                    return parseFloat((this.公分 / 100000).toFixed(3))
                },
                set(val) {
                    this.公分 = parseFloat((val * 100000).toFixed(3))
                }
            },
            尺: {
                get() {
                    return parseFloat((this.公分 / 33.3333333).toFixed(3))
                },
                set(val) {
                    this.公分 = parseFloat((val * 33.3333333).toFixed(3))
                }
            },
            英寸: {
                get() {
                    return parseFloat((this.公分 / 2.54).toFixed(3))
                },
                set(val) {
                    this.公分 = parseFloat((val * 2.54).toFixed(3))
                }
            },
            英尺: {
                get() {
                    return parseFloat((this.公分 / 30.48).toFixed(3))
                },
                set(val) {
                    this.公分 = parseFloat((val * 30.48).toFixed(3))
                }
            },
            碼: {
                get() {
                    return parseFloat((this.英寸 / 91.44).toFixed(3))
                },
                set(val) {
                    this.公分 = parseFloat((val * 91.44).toFixed(3))
                }
            }
        }
    });
    /*質量*/
    new Vue({
        el: '#質量',
        data() {
            return {
                公克: 0
            }
        },
        computed: {
            公兩: {
                //初始值
                get() {
                    return  parseFloat((this.公克 * 0.01).toFixed(3))
                },
                //更動後的值
                set(val) {
                    this.公克 = parseFloat((val / 0.01).toFixed(3))
                }
            },
            公斤: {
                //初始值
                get() {
                    return  parseFloat((this.公克 * 0.001).toFixed(3))
                },
                //更動後的值
                set(val) {
                    this.公克 = parseFloat((val / 0.001).toFixed(3))
                }
            },
            公擔: {
                get() {
                    return parseFloat((this.公克 * 0.00001).toFixed(3))
                },
                set(val) {
                    this.公克 = parseFloat((val / 0.00001).toFixed(3))
                }
            },
            公噸: {
                get() {
                    return parseFloat((this.公克 * 0.000001).toFixed(3))
                },
                set(val) {
                    this.公克 = parseFloat((val / 0.000001).toFixed(3))
                }
            },
            市斤: {
                get() {
                    return parseFloat((this.公克 * 0.002).toFixed(3))
                },
                set(val) {
                    this.公克 = parseFloat((val / 0.002).toFixed(3))
                }
            },
            台兩: {
                get() {
                    return parseFloat((this.公克 * 0.026667).toFixed(3))
                },
                set(val) {
                    this.公克 = parseFloat((val / 0.026667).toFixed(3))
                }
            },
            台斤: {
                get() {
                    return parseFloat((this.公克 * 0.001667).toFixed(3))
                },
                set(val) {
                    this.公克 = parseFloat((val / 1.666667).toFixed(3))
                }
            },
            盎司: {
                get() {
                    return parseFloat((this.公克 * 0.035274).toFixed(3))
                },
                set(val) {
                    this.公克 = parseFloat((val / 0.035274).toFixed(3))
                }
            },
            磅: {
                get() {
                    return parseFloat((this.公克 * 0.002204622).toFixed(3))
                },
                set(val) {
                    this.公克 = parseFloat((val / 0.002204622).toFixed(3))
                }
            },
            克拉: {
                get() {
                    return parseFloat((this.公克 * 5).toFixed(3))
                },
                set(val) {
                    this.公克 = parseFloat((val / 5).toFixed(3))
                }
            },
        }
    });
    /*面積*/
    new Vue({
        el: '#面積',
        data() {
            return {
                平方公尺: 0,
            }
        },
        computed: {
            公畝: {
                get() {
                    return parseFloat((this.平方公尺 * 0.01 ).toFixed(3))
                },
                set(val) {
                    this.平方公尺 = parseFloat((val / 0.01).toFixed(3))
                }
            },
            公頃: {
                get() {
                    return parseFloat((this.平方公尺 * 0.0001).toFixed(3))
                },
                set(val) {
                    this.平方公尺 = parseFloat((val / 0.0001).toFixed(3))
                }
            },
            市畝: {
                get() {
                    return parseFloat((this.平方公尺 * 0.0015).toFixed(3))
                },
                set(val) {
                    this.平方公尺 = parseFloat((val / 0.0015).toFixed(3))
                }
            },
            甲: {
                get() {
                    return parseFloat((this.平方公尺 * 0.000103102).toFixed(3))
                },
                set(val) {
                    this.平方公尺 = parseFloat((val / 0.000103102).toFixed(3))
                }
            },
            英畝: {
                get() {
                    return parseFloat((this.平方公尺 * 0.000247106).toFixed(3))
                },
                set(val) {
                    this.平方公尺 = parseFloat((val / 0.000247106).toFixed(3))
                }
            },
            美畝: {
                get() {
                    return parseFloat((this.平方公尺 * 0.000247104).toFixed(3))
                },
                set(val) {
                    this.平方公尺 = parseFloat((val / 0.000247104).toFixed(3))
                }
            },
            平方公里: {
                get() {
                    return parseFloat((this.平方公尺 * 0.000001).toFixed(3))
                },
                set(val) {
                    this.平方公尺 = parseFloat((val / 0.000001).toFixed(3))
                }
            },
        }
    });
    /*體積*/
    new Vue({
        el: '#體積',
        data() {
            return {
                毫公升: 0
            }
        },
        computed: {
            公升: {
                get() {
                    return parseFloat((this.毫公升 * 0.001).toFixed(3))
                },
                set(val) {
                    this.毫公升 = parseFloat((val / 0.001).toFixed(3))
                }
            },
            公石: {
                get() {
                    return parseFloat((this.毫公升 * 0.00001).toFixed(3))
                },
                set(val) {
                    this.毫公升 = parseFloat((val / 0.00001).toFixed(3))
                }
            },
            公秉: {
                get() {
                    return parseFloat((this.毫公升 * 0.000001).toFixed(3))
                },
                set(val) {
                    this.毫公升 = parseFloat((val / 0.000001).toFixed(3))
                }
            },
            立方公分: {
                get() {
                    return parseFloat((this.毫公升 * 1).toFixed(3))
                },
                set(val) {
                    this.毫公升 = parseFloat((val / 1).toFixed(3))
                }
            },
            立方公尺: {
                get() {
                    return parseFloat((this.毫公升 * 0.000001).toFixed(3))
                },
                set(val) {
                    this.毫公升 = parseFloat((val / 0.000001).toFixed(3))
                }
            },
            台升: {
                get() {
                    return parseFloat((this.毫公升 * 0.00055435).toFixed(3))
                },
                set(val) {
                    this.毫公升 = parseFloat((val / 0.00055435).toFixed(3))
                }
            },
        }
    });
    /*時間*/
    new Vue({
        el: '#時間',
        data() {
            return {
                秒: 0
            }
        },
        computed: {
            分: {
                get() {
                    return parseFloat((this.秒 * 0.016666666666667).toFixed(3))
                },
                set(val) {
                    this.秒 = parseFloat((val / 0.016666666666667).toFixed(3))
                }
            },
            時: {
                get() {
                    return parseFloat((this.秒 * 0.00027777777777778).toFixed(3))
                },
                set(val) {
                    this.秒 = parseFloat((val / 0.00027777777777778).toFixed(3))
                }
            },
            日: {
                get() {
                    return parseFloat((this.秒 * 1.1574074074074E-5).toFixed(3))
                },
                set(val) {
                    this.秒 = parseFloat((val / 1.1574074074074E-5).toFixed(3))
                }
            }
        }
    });
    /*男鞋*/
    new Vue({
        el: '#男鞋',
        data: {
            selected: '',
            options: [{
                    value: ['24', '38.5', '38.5', '6', '240'],
                },
                {
                    value: ['24.5', '39', '39', '6.5', '245'],
                },
                {
                    value: ['25', '40', '40', '7', '250'],
                },
                {
                    value: ['25.5', '24.5', '40.5', '40.5', '7.5', '255'],
                },
                {
                    value: ['26', '41', '41', '8', '260'],
                },
                {
                    value: ['26.5', '42', '42', '8.5', '265'],
                },
                {
                    value: ['27', '42.5', '42.5', '9', '270'],
                },
                {
                    value: ['27.5', '43', '43', '9.5', '275'],
                },
                {
                    value: ['28', '44.5', '44.5', '10', '280'],
                },
                {
                    value: ['28.5', '45', '45', '10.5', '285'],
                },
                {
                    value: ['29', '45.5', '45.5', '11', '290'],
                },
                {
                    value: ['29.5', '46', '46', '11.5', '295'],
                },
                {
                    value: ['30', '46.5', '46.5', '12', '300'],
                },
                {
                    value: ['30.5', '47', '47', '12.5', '305'],
                },
                {
                    value: ['31', '47.5', '47.5', '13', '310'],
                },
            ]
        }
    });
    /*女鞋*/
    new Vue({
        el: '#女鞋',
        data: {
            selected: '',
            options: [{
                    value: ['22.5', '35', '35', '5', '225'],
                },
                {
                    value: ['23', '36', '36', '5.5', '230'],
                },
                {
                    value: ['23.5', '37', '37', '6', '235'],
                },
                {
                    value: ['24', '38', '38', '6.5', '240'],
                },
                {
                    value: ['24.5', '39', '39', '7', '245'],
                },
                {
                    value: ['25', '39.5', '39.5', '7.5', '245~250'],
                },
                {
                    value: ['25.5', '40', '40', '8', '250'],
                },
                {
                    value: ['26', '40.5', '40.5', '8.5', '250~255'],
                },
                {
                    value: ['26.5', '41', '41', '9', '255'],
                },
                {
                    value: ['27', '41.5', '41.5', '9.5', '255~260'],
                },
            ]
        }
    });
    /*男上衣*/
    new Vue({
        el: '#男上衣',
        data: {
            index: '0',
            selected: '',
            options: [{
                    value: ['S', '46', '36', '90~95', '165/80A', '82~85', '72~75', '42', '163~167'],
                },
                {
                    value: ['M', '48', '38', '95~100', '170/84A', '96~89', '76~79', '44', '168~172'],
                },
                {
                    value: ['L', '50', '40', '100~105', '175/88A', '90~93', '80~84', '46', '173~177'],
                },
                {
                    value: ['XL', '52', '42', '105~110', '180/92A', '94~97', '85~88', '48', '178~182'],
                },
                {
                    value: ['XXL', '54', '42', '>110', '185/96A', '98~102', '89~92', '50', '182~187'],
                },
                {
                    value: ['XXXL', '56', '44', '', '190/100A', '103~107', '93~96', '52', '187~190'],
                }
            ]
        }
    });
    /*女上衣*/
    new Vue({
        el: '#女上衣',
        data: {
            index: '0',
            selected: '',
            options: [{
                    value: ['XXXS', '30~32', '0', '22/75', '145/73A', '74~76', '58~60', '34', '147~150'],
                },
                {
                    value: ['XXS', '32~34', '0', '33/80', '150/76A', '76~78', '60~62', '35', '150~153'],
                },
                {
                    value: ['XS', '34', '2', '44/85', '155/80A', '78~81', '62~66', '36', '153~157'],
                },
                {
                    value: ['S', '34~36', '4~6', '55/90', '160/84A', '82~85', '67~70', '38', '158~162'],
                },
                {
                    value: ['M', '38~40', '8~10', '66/95', '165/88A', '86~89', '71~74', '40', '163~167'],
                },
                {
                    value: ['L', '42', '12~14', '77/100', '170/92A', '90~93', '75~79', '42', '168~172'],
                },
                {
                    value: ['XL', '44', '16~18', '88/105', '175/96A', '94~97', '80~84', '44', '173~17'],
                },
                {
                    value: ['XXL', '46', '20~22', '99/110', '180/100A', '98~102', '85~89', '46', '177~180'],
                }
            ]
        }
    });
    /*女褲子*/
    new Vue({
        el: '#女褲子',
        data: {
            index: '0',
            selected: '',
            options: [{
                    value: ['XXXS', '30~32', '0', '22/75', '145/73A', '74~76', '58~60', '34', '147~150'],
                },
                {
                    value: ['XXS', '32~34', '0', '33/80', '150/76A', '76~78', '60~62', '35', '150~153'],
                },
                {
                    value: ['XS', '34', '2', '44/85', '155/80A', '78~81', '62~66', '36', '153~157'],
                },
                {
                    value: ['S', '34~36', '4~6', '55/90', '160/84A', '82~85', '67~70', '38', '158~162'],
                },
                {
                    value: ['M', '38~40', '8~10', '66/95', '165/88A', '86~89', '71~74', '40', '163~167'],
                },
                {
                    value: ['L', '42', '12~14', '77/100', '170/92A', '90~93', '75~79', '42', '168~172'],
                },
                {
                    value: ['XL', '44', '16~18', '88/105', '175/96A', '94~97', '80~84', '44', '173~17'],
                },
                {
                    value: ['XXL', '46', '20~22', '99/110', '180/100A', '98~102', '85~89', '46', '177~180'],
                }
            ]
        }
    });

</script>