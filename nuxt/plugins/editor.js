import EditorJS from '@editorjs/editorjs'
import Header from '@editorjs/header'
import List from '@editorjs/list'
import RawTool from '@editorjs/raw'
import Image from '@editorjs/image'
import CheckList from '@editorjs/checklist'
import Embed from '@editorjs/embed'
import Paragraph from '@editorjs/paragraph'
import Delimiter from '@editorjs/delimiter'
import Quote from '@editorjs/quote'

export default ({ $axios }, inject) => {
  inject('editor', {
    EditorJS: ({ holder, placeholder, data }) => {
      return new EditorJS({
        holder,
        placeholder,
        data,
        logLevel: 'ERROR',
        minHeight: 50,
        tools: {
          header: {
            class: Header,
            inlineToolbar: true,
            config: {
              levels: [2, 3, 4],
              defaultLevel: 3,
            },
          },
          paragraph: {
            class: Paragraph,
            inlineToolbar: true,
            config: {
              preserveBlank: true,
            },
          },
          list: {
            class: List,
            inlineToolbar: true,
          },
          image: {
            class: Image,
            inlineToolbar: true,
          },
          raw: {
            class: RawTool,
            inlineToolbar: true,
          },
          checklist: {
            class: CheckList,
            inlineToolbar: true,
          },
          embed: {
            class: Embed,
            inlineToolbar: true,
          },
          quote: {
            class: Quote,
            inlineToolbar: true,
          },
          delimiter: {
            class: Delimiter,
            inlineToolbar: true,
          },
          code: Code,
        },
      })
    },
  })
}
