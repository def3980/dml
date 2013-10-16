function round(num, cifra) {
    cifra = cifra || 0;
    cifra = Math.pow(10, cifra);
    return Math.floor(num * cifra) / cifra;
}