const downloadButton = document.getElementById('download-btn');
downloadButton.addEventListener('click', () => {
    const fileUrl = 'img/CV-Yanai_Yeshrun.pdf';
    const link = document.createElement('a');
    link.href = fileUrl;
    link.setAttribute('download', 'CV-Yanai_Yeshrun.pdf');
    link.click();
});