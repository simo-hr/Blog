import EditorJS from '@editorjs/editorjs'
import Header from '@editorjs/header'
import List from '@editorjs/list'
import Image from '@editorjs/image'
import Embed from '@editorjs/embed'
import Paragraph from '@editorjs/paragraph'
import Delimiter from '@editorjs/delimiter'
import Quote from '@editorjs/quote'
import { CodeTool } from './editors/code_tool'
import { MarkerTool } from './editors/marker_tool'

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
          code: CodeTool,
          marker: MarkerTool,
        },
      })
    },
  })
}
