<style>
    .countdownend {
    margin-bottom: 40px;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    }
    @media only screen and (max-width: 1024px) {
    .countdownend {
        justify-content: center;
    }
    }
    .countdownend .time {
    display: flex;
    flex-direction: column;
    justify-content: start;
    }
    .countdownend .time:not(:last-child) {
    margin-right: 16px;
    }
    .countdownend .time #days,
    .countdownend .time #hours,
    .countdownend .time #minutes,
    .countdownend .time #seconds,
    .countdownend .time .semicolon {
    font-family: Samsung Sharp Sans;
    font-style: normal;
    font-weight: bold;
    letter-spacing: 0.3px;
    }
    @media only screen and (min-width: 1024px) {
    .countdownend .time #days,
    .countdownend .time #hours,
    .countdownend .time #minutes,
    .countdownend .time #seconds,
    .countdownend .time .semicolon {
        font-size: 45px;
        line-height: 91px;
    }
    }
    @media only screen and (max-width: 1024px) {
    .countdownend .time #days,
    .countdownend .time #hours,
    .countdownend .time #minutes,
    .countdownend .time #seconds,
    .countdownend .time .semicolon {
        font-size: 20px;
        line-height: 50px;
        text-align: center;
    }
    }
    .countdownend .time span {
    font-family: Samsung Sharp Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    line-height: 15px;
    text-align: center;
    letter-spacing: 0.3px;
    align-self: center;
    }
    .countdownend .semicolon {
    margin-right: 16px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    font-family: Samsung Sharp Sans;
    font-style: normal;
    font-weight: bold;
    letter-spacing: 0.3px;
    }
    @media only screen and (min-width: 1024px) {
    .countdownend .semicolon {
        font-size: 45px;
        line-height: 91px;
    }
    }
    @media only screen and (max-width: 1024px) {
    .countdownend .semicolon {
        font-size: 20px;
        line-height: 50px;
        text-align: center;
    }
    }
</style>