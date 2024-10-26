fetch('https://fr.indeed.com/pagead/clk?mo=r&ad=-6NYlbfkN0CmI1NWXb3lEK0w7RoxkpmBOTbtI7c7YseE7CFIH8i2p1kjHNp9rBpieqvuUu_Wsyj1--2RJXAmrYmuApNoVV8orUtnEyYXHixJjFN4gk5RIYPuElyLuvUoQmmen0bqAvRty7nSMkFgvBYR9DGoFeSGCDaSI96BIT-hAQpPqoN5LJriZ7s16_pCsPKz1ti5A82c-fSfMWI_1kBMtvUjc3Q_2kSU1l-3AaiUZx0l2Q_8yb-hv3YSbvI7geLbpgYRZbYYQisBLR9eUC9Ba13dEkqNT2fUmF6GuZuGHrQWguBb-dpor8S3zR5Vb_g7pmVc3O-qZVBP-3UQQ8EnqBhfOHFPnN3txRPCfRtThHmm2TAOVcR8rRfELP_DkOM2tv314h-Q8v1xkCbG1xlcx02Tws5vHdy0kq2BHm1kDhk3lEXKiSXmZ5WE9qSOVGN3_gNzwhRRarjcVPMpIu9YJRSlNXFWjIbMn9pMaHG6Vh6oDAtPof1MZGOH6NJ4HeI1qhOBU63auZrhZTm0P_6ZuluwK4MtFeMfPP43GEeZYQXETSuSAm-9AGe5OJLt9FmwDE_2owTFHn8eHpk4e-8Ud98F7iYo0nBvjYjoxGsrQZOCfb8Q1ydA0uQ8-S3ibsxTxg2-RQFcU1yUbBZZt7HC8_HqholTGthpMmw2-9y4_NSVFYmbkzpjK3jyZUHK&xkcb=SoDG6_M3AvFxMOB95r0LbzkdCdPP&camk=xqnMBGaf-K-o69yhyaWVhA%3D%3D&from=hp&tk=1hvf6vmtnk9ab800&jsa=3799&vjs=3')
  .then(response => response.text()) // Pour récupérer le texte brut
  .then(data => {
    console.log(data); // Contenu de la page
  })
  .catch(error => {
    console.error('Erreur:', error);
  });
