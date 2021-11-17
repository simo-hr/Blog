const codeParser = (block) => {
  return `
    <pre id="code-block">
			<code>
				${block.data.code.replace(/</g, '&lt;').replace(/>/, '&gt;')}
			</code>
		</pre>
	`
}

const listParser = (block) => {
  let listItems = ''
  for (let i = 0; i < block.data.items.length; i++) {
    listItems += `<li>${block.data.items[i]}</li>`
  }
  return `
		<div id="order-list">
			<ol>
				${listItems}
			</ol>
		</div>
	`
}

const quoteParser = (block) => {
  return `
  <div id="quote-block">
    <div>
        <blockquote cite="${block.data.caption}">
            ${block.data.text}
        </blockquote>
        <span>${block.data.caption}</span>
    </div>
  </div>
  `
}

const customParser = {
  code: codeParser,
  list: listParser,
  quote: quoteParser,
}

export { customParser }
