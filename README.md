<p align="middle">
  <img src="./assets/e-k-logo-site.png" width="200" />&nbsp&nbsp&nbsp&nbsp&nbsp
  <img src="./assets/logo-galactonautas.jpeg" width="120" /> 
</p>

[# Jogar](https://ema-klabin.github.io/Atelie-da-Casa-Museu-Ema-Klabin/) 

# Ateliê da Casa Museu Ema Klabin

Jogo desenvolvido pelo Estúdio Galactonautas <galactonautas@gmail.com> | [twitter](https://twitter.com/Galactonautas)

## Setup do projeto

1. `$ git clone https://github.com/ema-klabin/Atelie-da-Casa-Museu-Ema-Klabin.git`
2. `$ cd Atelie-da-Casa-Museu-Ema-Klabin`
3. `$ npm install`

## Atualizações do jogo

1. Substitua as pastas `Build` e `TemplateData` na pasta `jogo` pelos pastas produzidas na build do Unity
2. O `index.html` produzido na build deve ser ignorado e não entrar neste projeto
3. É importante manter o mesmo nome dos arquivos entre as builds para não quebrar o link no `index`
    ```
    Build(fim).data.unityweb
    Build(fim).framework.js.unityweb
    Build(fim).loader.js
    Build(fim).wasm.unityweb
    ```

4. `$ git add .`
5. `$ npm run commit` abrirá uma série de opções, selecione a mais adequada e siga os próximos passos na CLI.
    ```
    ? Select the type of change that you're committing:
      fix:      A bug fix
      docs:     Documentation only changes
      style:    Changes that do not affect the meaning of the code (white-space, formatting, missing semi-colons, etc) 
      refactor: A code change that neither fixes a bug nor adds a feature
      perf:     A code change that improves performance
      test:     Adding missing tests or correcting existing tests
      build:    Changes that affect the build system or external dependencies (example scopes: gulp, broccoli, npm)    
    (Move up and down to reveal more choices)
    ```
6. `$ npm run release`
7. `$ git push`

## Plugin WordPress

1. rodar `$ npm run bundle` para gerar o .zip do plugin
2. fazer o upload do `atelie-cmek.zip` no wordpress
   
### Shortcode WordPress

- usar o shortcode `[atelie-cmek]` onde deseja que o jogo apareça


***
[emaklabin.org.br](https://emaklabin.org.br/)<br>
Casa Museu Ema Klabin<br>
Rua Portugal, 43 - Jd. Europa - São Palo - SP<br>
01446-020<br>

