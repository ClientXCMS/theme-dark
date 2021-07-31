const iframe = document.getElementsByTagName("iframe")
if (iframe.length >= 2) {

    const discord = iframe[0]
    const twitter = iframe[1]
    discord.src = discord.src.replace("light", "dark")
    twitter.dataset.theme = "dark"

}
