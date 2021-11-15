class CodeTool {
  static get toolbox() {
    return {
      title: 'code',
      icon: `<span>Code</span>`,
    }
  }

  constructor({ data }) {
    this.data = data
    this.wrapper = undefined
  }

  render() {
    this.wrapper = document.createElement('div')
    this.wrapper.classList.add('code-block')
    const pre = document.createElement('pre')
    const code = document.createElement('code')
    const textarea = document.createElement('textarea')
    textarea.value = this.data.code ? this.data.code : ''

    this.wrapper.appendChild(pre)
    pre.appendChild(code)
    code.appendChild(textarea)

    textarea.addEventListener('input', () => {
      const scrollHeight = textarea.scrollHeight
      textarea.style.height = scrollHeight + 'px'
    })
    return this.wrapper
  }

  save(blockContent) {
    const textarea = blockContent.querySelector('textarea')
    const code = textarea.value
    return {
      code,
    }
  }
}

export { CodeTool }
