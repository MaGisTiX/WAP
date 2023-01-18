# Matrix Multiplication API (Python)

Jednoduchá API pro násobení matic, napsaná v Pythonu. API umí spolu násobit dvě matice, obě zadané jako 2D pole. API vrací výslednou matici též jako 2D pole.

Vstup i výstup je ve formátu JSON.

## Použití

Pro vynásobení matic je potřeba poslat API požadavek, ve kterém budou matice zadané jako parametry v URL.

URL by měla vypadat následovně:

`http://localhost/matrix-multiplication?matrix1=[PRVNÍ MATICE]&matrix2=[DRUHÁ MATICE]`

### Například:

Následující URL vynásobí matice `[[1,2,3],[4,5,6]]` a `[[1,2],[3,4],[5,6]]`:

`http://localhost/matrix-multiplication?matrix1=[[1,2,3],[4,5,6]]&matrix2=[[1,2],[3,4],[5,6]]`

a vrátí výsledek:

`[[22,28],[49,64]]`

### Poznámka:

API umí pracovat pouze s číselnými hodnotami. Pokud se v matici objeví nějaká jiná hodnota, API vrátí chybu v podobě `Error`.