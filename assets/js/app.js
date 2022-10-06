const messages = {
    locale: 'de',
    en: {
      message: {
        hello: 'hello world'
      }
    },
    de: {
      message: {
        hello: 'hallo welt!!!!!!'
      }
    }
  }
  
  // 2. Create i18n instance with options
  const i18n = VueI18n.createI18n({
    locale: 'de', // set locale
    fallbackLocale: 'en', // set fallback locale
    messages, // set locale messages
    // If you need to specify other options, you can set other options
    // ...
  })

const { createApp } = Vue
createApp({
    el: '#navigation',
    data() {
        return {
            name: 'UltraGold',
            langs: ['de', 'en'],
            pics: ['assets/img/ger.png', 'assets/img/usa.png'],
            links: [
                {name:'Home', link:'#hero', lang: 'en'},
                {name:'About', link:'#abouten', lang: 'en'},
                {name:'Services', link:'#servicesen', lang: 'en'},
                {name:'Work', link:'#worken', lang: 'en'},
                {name:'Contact', link:'#contacten', lang: 'en'},
            ],
            linksde: [
                {name:'Start', link:'#hero', lang: 'de'},
                {name:'Über mich', link:'#about', lang: 'de'},
                {name:'Services', link:'#services', lang: 'de'},
                {name:'Work', link:'#work', lang: 'de'},
                {name:'Kontakt', link:'#contact', lang: 'de'},
            ],
        }       
    },
    methods: {
        sayHi: function () {
            return 'Hallo Welt' + this.name;
        },
        changeLanguage(lang) {
            if(lang == 1) { lang = 'en' }
            else { lang = 'de' }
            this.$i18n.locale = lang
            document.body.className=lang
        },
        navbarlinksActive() {
            console.log("Scroll")
            let navbarlinks = document.querySelector('#navbar .scrollto')
            let position = window.scrollY + 200
            navbarlinks.forEach(navbarlink => {
                if (!navbarlink.hash) return
                let section = select(navbarlink.hash)
                if (!section) return
                if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                    navbarlink.classList.add('active')
                    console.log("Active")
                } else {
                    navbarlink.classList.remove('active')
                }
            })
        }
    }
}).use(i18n).mount('#navigation')
