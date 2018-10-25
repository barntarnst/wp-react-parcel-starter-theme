import React from 'react'

export default class FrontPage extends React.Component {
  constructor(props) {
    super(props)
  }
  componentDidMount() {}
  render() {
    const content = this.props.content
    return (
      <div className="frontpage-container">This is the front-page!! yes</div>
    )
  }
}
