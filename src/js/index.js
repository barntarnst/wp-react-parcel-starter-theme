import React, { Fragment } from 'react'
import ReactDOM from 'react-dom'
// import FrontPage from './components/FrontPage'
// import Page from './components/Page'
import { Footer } from './containers'

import '../style/main.scss'

class WpReactParcelStarter extends React.Component {
  // getComponent() {
  //   const content = window.postData
  //   const pageTemplate = document.getElementById('root').dataset.template
  //   switch (pageTemplate) {
  //     case 'front-page':
  //       return <FrontPage content={content} />
  //     case 'page':
  //       return <Page contpent={content} />
  //     default:
  //       return <div className="no-template">Could not find page.</div>
  //   }
  // }

  render() {
    return (
      <Fragment>
        <Footer />
      </Fragment>
    )
  }
}

ReactDOM.render(<WpReactParcelStarter />, document.getElementById('root'))
